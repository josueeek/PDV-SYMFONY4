<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\HomeController::index',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'echo_test' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\HomeController::test',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/echo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pedido_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\PedidoController::list',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/pedido',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pedido_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\PedidoController::search',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/pedido/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pedido_details' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'App\\Controller\\PedidoController::details',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/pedido_details',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pedido_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\PedidoController::create',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/pedido/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pedido_store' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\PedidoController::store',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/pedido/register',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pedido_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'App\\Controller\\PedidoController::delete',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/pedido/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pessoa_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\PessoaController::list',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/pessoa',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pessoa_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\PessoaController::search',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/pessoa/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pessoa_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\PessoaController::create',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/pessoa/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pessoa_store' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\PessoaController::store',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/pessoa/store',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pessoa_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'App\\Controller\\PessoaController::update',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/pessoa/update',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pessoa_edit' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\PessoaController::edit',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/pessoa/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pessoa_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'App\\Controller\\PessoaController::delete',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/pessoa/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'produto_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\ProdutoController::list',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/produto',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'produto_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\ProdutoController::search',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/produto/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'produto_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\ProdutoController::create',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/produto/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'produto_store' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\ProdutoController::store',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/produto/store',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'produto_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'App\\Controller\\ProdutoController::update',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/produto/update',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'produto_edit' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\ProdutoController::edit',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/produto/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'produto_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'App\\Controller\\ProdutoController::delete',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/produto/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_twig_error_test' => array (  0 =>   array (    0 => 'code',    1 => '_format',  ),  1 =>   array (    '_controller' => 'twig.controller.preview_error:previewErrorPageAction',    '_format' => 'html',  ),  2 =>   array (    'code' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'code',    ),    2 =>     array (      0 => 'text',      1 => '/_error',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
