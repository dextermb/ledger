<?php
namespace Eve\Interfaces;


interface Collection
{
	/**
	 * Get item IDs
	 *
	 * @return array
	 */
	public function getIds();

	/**
	 * Get item details for given IDs
	 *
	 * @param int[] $ids
	 * @return Model
	 */
	public function getItems(array $ids = []);

	/**
	 * Get item details for an IDs
	 *
	 * @param int $id
	 * @return Model
	 */
	public function getItem(int $id);
}