<?php
/**
 * Contributor company: iPragmatech solution Pvt Ltd.
 * Contributor Author : Manish Kumar
 * Date: 23/5/16
 * Time: 11:55 AM
 */
namespace Blark\Wishlist\Api;

/**
 * Interface WishlistManagementInterface
 * @api
 */
interface WishlistManagementInterface
{

    /**
     * Return items in a customer's wishlist.
     *
     * @param int $customerId
     * @return array
     */
    public function getWishlist($customerId);

    /**
     * Add a product to customer's wishlist.
     *
     * @param int $customerId
     * @param int $productId
     * @return array
     *
     */
    public function addToWishlist($customerId, $productId);

    /**
     * Remove an item from a customer's wishlist.
     *
     * @param int $customerId
     * @param int $itemId
     * @return status
     *
     */
    public function removeFromWishlist($customerId, $itemId);

    /**
     * Read information on a customer's wishlist.
     *
     * @param int $customerId
     * @return array
     *
     */
    public function getWishlistInfo($customerId);

}
