<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DhmWsController
 *
 * @author sayfeddine
 */
/**
 * @file
 * Contains \Drupal\dhm_ws\Controller\TestAPIController.
 */
namespace Drupal\dhm_ws\Controller;
use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
/**
 * Controller routines for dhm_ws routes.
 */
class DhmWsController extends ControllerBase {
  /**
   * Callback for `my-api/get.json` API method.
   */
  public function get_produit( Request $request ) {
    $response['data'] = 'Some test data to return';
    $response['method'] = 'GET';
    return new JsonResponse( $response );
  }
  /**
   * Callback for `my-api/put.json` API method.
   */
  public function put_produit( Request $request ) {
    $response['data'] = 'Some test data to return';
    $response['method'] = 'PUT';
    return new JsonResponse( $response );
  }
  /**
   * Callback for `my-api/post.json` API method.
   */
  public function post_produit( Request $request ) {
    // This condition checks the `Content-type` and makes sure to 
    // decode JSON string from the request body into array.
    if ( 0 === strpos( $request->headers->get( 'Content-Type' ), 'application/json' ) ) {
      $data = json_decode( $request->getContent(), TRUE );
      $request->request->replace( is_array( $data ) ? $data : [] );
    }
    $response['data'] = 'Some test data to return';
    $response['method'] = 'POST';
    return new JsonResponse( $response );
  }
  /**
   * Callback for `my-api/delete.json` API method.
   */
  public function delete_produit( Request $request ) {
    $response['data'] = 'Some test data to return';
    $response['method'] = 'DELETE';
    return new JsonResponse( $response );
  }
}