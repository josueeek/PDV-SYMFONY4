<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        // home
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'App\\Controller\\HomeController::index',  '_route' => 'home',);
            if (substr($pathinfo, -1) !== '/') {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'home'));
            }

            return $ret;
        }

        // echo_test
        if ('/echo' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\HomeController::test',  '_route' => 'echo_test',);
        }

        if (0 === strpos($pathinfo, '/p')) {
            if (0 === strpos($pathinfo, '/pedido')) {
                // pedido_index
                if ('/pedido' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\PedidoController::list',  '_route' => 'pedido_index',);
                }

                // pedido_search
                if ('/pedido/search' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\PedidoController::search',  '_route' => 'pedido_search',);
                }

                // pedido_details
                if (0 === strpos($pathinfo, '/pedido_details') && preg_match('#^/pedido_details/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pedido_details')), array (  '_controller' => 'App\\Controller\\PedidoController::details',));
                }

                // pedido_create
                if ('/pedido/create' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\PedidoController::create',  '_route' => 'pedido_create',);
                }

                // pedido_store
                if ('/pedido/register' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\PedidoController::store',  '_route' => 'pedido_store',);
                }

                // pedido_delete
                if (0 === strpos($pathinfo, '/pedido/delete') && preg_match('#^/pedido/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pedido_delete')), array (  '_controller' => 'App\\Controller\\PedidoController::delete',));
                }

            }

            elseif (0 === strpos($pathinfo, '/pessoa')) {
                // pessoa_index
                if ('/pessoa' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\PessoaController::list',  '_route' => 'pessoa_index',);
                }

                // pessoa_search
                if ('/pessoa/search' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\PessoaController::search',  '_route' => 'pessoa_search',);
                }

                // pessoa_store
                if ('/pessoa/store' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_pessoa_store;
                    }

                    return array (  '_controller' => 'App\\Controller\\PessoaController::store',  '_route' => 'pessoa_store',);
                }
                not_pessoa_store:

                // pessoa_create
                if ('/pessoa/create' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\PessoaController::create',  '_route' => 'pessoa_create',);
                }

                // pessoa_update
                if (0 === strpos($pathinfo, '/pessoa/update') && preg_match('#^/pessoa/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pessoa_update')), array (  '_controller' => 'App\\Controller\\PessoaController::update',));
                }

                // pessoa_edit
                if ('/pessoa/edit' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_pessoa_edit;
                    }

                    return array (  '_controller' => 'App\\Controller\\PessoaController::edit',  '_route' => 'pessoa_edit',);
                }
                not_pessoa_edit:

                // pessoa_delete
                if (0 === strpos($pathinfo, '/pessoa/delete') && preg_match('#^/pessoa/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pessoa_delete')), array (  '_controller' => 'App\\Controller\\PessoaController::delete',));
                }

            }

            elseif (0 === strpos($pathinfo, '/produto')) {
                // produto_index
                if ('/produto' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\ProdutoController::list',  '_route' => 'produto_index',);
                }

                // produto_search
                if ('/produto/search' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\ProdutoController::search',  '_route' => 'produto_search',);
                }

                // produto_store
                if ('/produto/store' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_produto_store;
                    }

                    return array (  '_controller' => 'App\\Controller\\ProdutoController::store',  '_route' => 'produto_store',);
                }
                not_produto_store:

                // produto_create
                if ('/produto/create' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\ProdutoController::create',  '_route' => 'produto_create',);
                }

                // produto_update
                if (0 === strpos($pathinfo, '/produto/update') && preg_match('#^/produto/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'produto_update')), array (  '_controller' => 'App\\Controller\\ProdutoController::update',));
                }

                // produto_edit
                if ('/produto/edit' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_produto_edit;
                    }

                    return array (  '_controller' => 'App\\Controller\\ProdutoController::edit',  '_route' => 'produto_edit',);
                }
                not_produto_edit:

                // produto_delete
                if (0 === strpos($pathinfo, '/produto/delete') && preg_match('#^/produto/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'produto_delete')), array (  '_controller' => 'App\\Controller\\ProdutoController::delete',));
                }

            }

        }

        // _twig_error_test
        if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
