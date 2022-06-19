<?php

/**Cart: A very simple PHP cart library.
 * Copyright (c) 2017 Sei Kan
 * Distributed under the terms of the MIT License.
 * Redistributions of files must retain the above copyright notice.
 * @copyright  2017 Sei Kan <seikan.dev@gmail.com>
 * @license    http://www.opensource.org/licenses/mit-license.php The MIT License
 * @see       https://github.com/seikan/Cart	*/
class Cart
{
	protected $cartId;	//每個商品的num
	protected $cartMaxItem = 0;		//購物車最大容納商品
	protected $itemMaxQuantity = 0;		//購物車最大容納數量
	protected $useCookie = false;	//Enable or disable cookie.
	private $items = [];	//A collection of cart items.
	public function __construct($options = [])		//最初的購物車
	{
		if (!session_id()) {
			session_start();
		}

		if (isset($options['cartMaxItem']) && preg_match('/^\d+$/', $options['cartMaxItem'])) {
			$this->cartMaxItem = $options['cartMaxItem'];
		}

		if (isset($options['itemMaxQuantity']) && preg_match('/^\d+$/', $options['itemMaxQuantity'])) {
			$this->itemMaxQuantity = $options['itemMaxQuantity'];
		}

		if (isset($options['useCookie']) && $options['useCookie']) {
			$this->useCookie = true;
		}

		$this->cartId = md5((isset($_SERVER['HTTP_HOST'])) ? $_SERVER['HTTP_HOST'] : 'SimpleCart') . '_cart';

		$this->read();
	}
	
	public function getItems()		//獲取購物車中的商品
	{
		return $this->items;
	}
	
	public function isEmpty()		//檢查購物車是否為空
	{
		return empty(array_filter($this->items));
	}

	public function getTotalItem()		//取得購物車的物品
	{
		$total = 0;
		foreach ($this->items as $items) {
			foreach ($items as $item) {
				++$total;
			}
		}
		return $total;
	}

	public function getTotalQuantity()		//取得購物車中總共的物品數量
	{
		$quantity = 0;
		foreach ($this->items as $items) {
			foreach ($items as $item) {
				$quantity += $item['quantity'];
			}
		}
		return $quantity;
	}

	public function getAttributeTotal($attribute = 'price')		//取得購物車屬性的sum(總價)
	{
		$total = 0;
		foreach ($this->items as $items) {
			foreach ($items as $item) {
				if (isset($item['attributes'][$attribute])) {
					$total += $item['attributes'][$attribute] * $item['quantity'];
				}
			}
		}
		return $total;
	}

	public function clear()		//刪除購物車全部的商品
	{
		$this->items = [];
		$this->write();
	}

	public function isItemExists($id, $attributes = [])		//查看商品是否存在購物車中
	{
		$attributes = (is_array($attributes)) ? array_filter($attributes) : [$attributes];

		if (isset($this->items[$id])) {
			$hash = md5(json_encode($attributes));
			foreach ($this->items[$id] as $item) {
				if ($item['hash'] == $hash) {
					return true;
				}
			}
		}

		return false;
	}

	public function getItem($id, $hash = null)		//取出購物車中指定的商品
	{
		if($hash){
			$key = array_search($hash, array_column($this->items[$id], 'hash'));
			if($key !== false)
				return $this->items[$id][$key];
			return false;
		}
		else
			return reset($this->items[$id]);
	}

	public function add($id, $quantity = 1, $attributes = [])		//Add item to cart
	{
		$quantity = (preg_match('/^\d+$/', $quantity)) ? $quantity : 1;
		$attributes = (is_array($attributes)) ? array_filter($attributes) : [$attributes];
		$hash = md5(json_encode($attributes));

		if (count($this->items) >= $this->cartMaxItem && $this->cartMaxItem != 0) {
			return false;
		}

		if (isset($this->items[$id])) {
			foreach ($this->items[$id] as $index => $item) {
				if ($item['hash'] == $hash) {
					$this->items[$id][$index]['quantity'] += $quantity;
					$this->items[$id][$index]['quantity'] = ($this->itemMaxQuantity < $this->items[$id][$index]['quantity'] && $this->itemMaxQuantity != 0) ? $this->itemMaxQuantity : $this->items[$id][$index]['quantity'];

					$this->write();

					return true;
				}
			}
		}

		$this->items[$id][] = [
			'id'         => $id,
			'quantity'   => ($quantity > $this->itemMaxQuantity && $this->itemMaxQuantity != 0) ? $this->itemMaxQuantity : $quantity,
			'hash'       => $hash,
			'attributes' => $attributes,
		];

		$this->write();

		return true;
	}

	public function update($id, $quantity = 1, $attributes = [])	//更新商品的數量
	{
		$quantity = (preg_match('/^\d+$/', $quantity)) ? $quantity : 1;

		if ($quantity == 0) {
			$this->remove($id, $attributes);

			return true;
		}

		if (isset($this->items[$id])) {
			$hash = md5(json_encode(array_filter($attributes)));

			foreach ($this->items[$id] as $index => $item) {
				if ($item['hash'] == $hash) {
					$this->items[$id][$index]['quantity'] = $quantity;
					$this->items[$id][$index]['quantity'] = ($this->itemMaxQuantity < $this->items[$id][$index]['quantity'] && $this->itemMaxQuantity != 0) ? $this->itemMaxQuantity : $this->items[$id][$index]['quantity'];

					$this->write();

					return true;
				}
			}
		}

		return false;
	}

	public function remove($id, $attributes = [])		//從購物車刪除商品
	{
		if (!isset($this->items[$id])) {
			return false;
		}

		if (empty($attributes)) {
			unset($this->items[$id]);

			$this->write();

			return true;
		}
		$hash = md5(json_encode(array_filter($attributes)));

		foreach ($this->items[$id] as $index => $item) {
			if ($item['hash'] == $hash) {
				unset($this->items[$id][$index]);
				$this->items[$id] = array_values($this->items[$id]);

				$this->write();

				return true;
			}
		}

		return false;
	}

	public function destroy()		//Destroy cart session
	{
		$this->items = [];

		if ($this->useCookie) {
			setcookie($this->cartId, '', -1);
		} else {
			unset($_SESSION[$this->cartId]);
		}
	}

	private function read()		//讀取購物車的session
	{
		$this->items = ($this->useCookie) ? json_decode((isset($_COOKIE[$this->cartId])) ? $_COOKIE[$this->cartId] : '[]', true) : json_decode((isset($_SESSION[$this->cartId])) ? $_SESSION[$this->cartId] : '[]', true);
	}

	private function write()	//改變購物車的session
	{
		if ($this->useCookie) {
			setcookie($this->cartId, json_encode(array_filter($this->items)), time() + 604800, "/");
		} else {
			$_SESSION[$this->cartId] = json_encode(array_filter($this->items));
		}
	}
}