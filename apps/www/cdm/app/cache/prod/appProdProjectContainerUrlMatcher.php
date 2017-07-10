<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        // eavmanager_layout.dashboard
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'eavmanager_layout.dashboard');
            }

            return array (  '_controller' => 'CleverAge\\EAVManager\\LayoutBundle\\Controller\\DashboardController::dashboardAction',  '_route' => 'eavmanager_layout.dashboard',);
        }

        if (0 === strpos($pathinfo, '/medias')) {
            // sidus_admin.media.list
            if (preg_match('#^/medias/(?P<familyCode>[^/]++)/list$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sidus_admin.media.list')), array (  '_controller' => 'CleverAge\\EAVManager\\AdminBundle\\Controller\\EAVDataController::listAction',  '_admin' => 'media',));
            }

            // sidus_admin.media.create
            if (preg_match('#^/medias/(?P<familyCode>[^/]++)/create$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sidus_admin.media.create')), array (  '_controller' => 'CleverAge\\EAVManager\\AdminBundle\\Controller\\EAVDataController::createAction',  '_admin' => 'media',));
            }

            // sidus_admin.media.edit
            if (preg_match('#^/medias/(?P<familyCode>[^/]++)/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sidus_admin.media.edit')), array (  '_controller' => 'CleverAge\\EAVManager\\AdminBundle\\Controller\\EAVDataController::editAction',  '_admin' => 'media',));
            }

            // sidus_admin.media.delete
            if (preg_match('#^/medias/(?P<familyCode>[^/]++)/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sidus_admin.media.delete')), array (  '_controller' => 'CleverAge\\EAVManager\\AdminBundle\\Controller\\EAVDataController::deleteAction',  '_admin' => 'media',));
            }

            if (0 === strpos($pathinfo, '/medias_browser')) {
                // sidus_admin.media_browser.list
                if (preg_match('#^/medias_browser/(?P<familyCode>[^/]++)/list$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sidus_admin.media_browser.list')), array (  '_controller' => 'CleverAge\\EAVManager\\AdminBundle\\Controller\\EAVDataController::listAction',  '_admin' => 'media_browser',));
                }

                // sidus_admin.media_browser.create
                if (preg_match('#^/medias_browser/(?P<familyCode>[^/]++)/create$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sidus_admin.media_browser.create')), array (  '_controller' => 'CleverAge\\EAVManager\\AdminBundle\\Controller\\EAVDataController::createAction',  '_admin' => 'media_browser',));
                }

                // sidus_admin.media_browser.edit
                if (preg_match('#^/medias_browser/(?P<familyCode>[^/]++)/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sidus_admin.media_browser.edit')), array (  '_controller' => 'CleverAge\\EAVManager\\AdminBundle\\Controller\\EAVDataController::editAction',  '_admin' => 'media_browser',));
                }

                // sidus_admin.media_browser.delete
                if (preg_match('#^/medias_browser/(?P<familyCode>[^/]++)/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sidus_admin.media_browser.delete')), array (  '_controller' => 'CleverAge\\EAVManager\\AdminBundle\\Controller\\EAVDataController::deleteAction',  '_admin' => 'media_browser',));
                }

            }

        }

        elseif (0 === strpos($pathinfo, '/media/cache/resolve')) {
            // liip_imagine_filter_runtime
            if (preg_match('#^/media/cache/resolve/(?P<filter>[A-z0-9_-]*)/rc/(?P<hash>[^/]++)/(?P<path>.+)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_liip_imagine_filter_runtime;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'liip_imagine_filter_runtime')), array (  '_controller' => 'liip_imagine.controller:filterRuntimeAction',));
            }
            not_liip_imagine_filter_runtime:

            // liip_imagine_filter
            if (preg_match('#^/media/cache/resolve/(?P<filter>[A-z0-9_-]*)/(?P<path>.+)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_liip_imagine_filter;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'liip_imagine_filter')), array (  '_controller' => 'liip_imagine.controller:filterAction',));
            }
            not_liip_imagine_filter:

        }

        elseif (0 === strpos($pathinfo, '/resources')) {
            // sidus_admin.resource.list
            if ('/resources' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sidus_admin.resource.list');
                }

                return array (  '_controller' => 'CleverAge\\EAVManager\\AdminBundle\\Controller\\GenericAdminController::listAction',  '_admin' => 'resource',  '_route' => 'sidus_admin.resource.list',);
            }

            // sidus_admin.resource.delete
            if (preg_match('#^/resources/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sidus_admin.resource.delete')), array (  '_controller' => 'CleverAge\\EAVManager\\AdminBundle\\Controller\\GenericAdminController::deleteAction',  '_admin' => 'resource',));
            }

        }

        elseif (0 === strpos($pathinfo, '/users')) {
            // sidus_admin.user.list
            if ('/users' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sidus_admin.user.list');
                }

                return array (  '_controller' => 'CleverAge\\EAVManager\\AdminBundle\\Controller\\UserController::listAction',  '_admin' => 'user',  '_route' => 'sidus_admin.user.list',);
            }

            // sidus_admin.user.create
            if ('/users/create' === $pathinfo) {
                return array (  '_controller' => 'CleverAge\\EAVManager\\AdminBundle\\Controller\\UserController::createAction',  '_admin' => 'user',  '_route' => 'sidus_admin.user.create',);
            }

            // sidus_admin.user.edit
            if (preg_match('#^/users/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sidus_admin.user.edit')), array (  '_controller' => 'CleverAge\\EAVManager\\AdminBundle\\Controller\\UserController::editAction',  '_admin' => 'user',));
            }

            // sidus_admin.user.delete
            if (preg_match('#^/users/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sidus_admin.user.delete')), array (  '_controller' => 'CleverAge\\EAVManager\\AdminBundle\\Controller\\UserController::deleteAction',  '_admin' => 'user',));
            }

            // sidus_admin.user.resetPassword
            if (preg_match('#^/users/(?P<id>[^/]++)/reset\\-password$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sidus_admin.user.resetPassword')), array (  '_controller' => 'CleverAge\\EAVManager\\AdminBundle\\Controller\\UserController::resetPasswordAction',  '_admin' => 'user',));
            }

        }

        elseif (0 === strpos($pathinfo, '/groups')) {
            // sidus_admin.group.list
            if ('/groups' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sidus_admin.group.list');
                }

                return array (  '_controller' => 'CleverAge\\EAVManager\\AdminBundle\\Controller\\UserController::listAction',  '_admin' => 'group',  '_route' => 'sidus_admin.group.list',);
            }

            // sidus_admin.group.create
            if ('/groups/create' === $pathinfo) {
                return array (  '_controller' => 'CleverAge\\EAVManager\\AdminBundle\\Controller\\UserController::createAction',  '_admin' => 'group',  '_route' => 'sidus_admin.group.create',);
            }

            // sidus_admin.group.edit
            if (preg_match('#^/groups/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sidus_admin.group.edit')), array (  '_controller' => 'CleverAge\\EAVManager\\AdminBundle\\Controller\\UserController::editAction',  '_admin' => 'group',));
            }

            // sidus_admin.group.delete
            if (preg_match('#^/groups/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sidus_admin.group.delete')), array (  '_controller' => 'CleverAge\\EAVManager\\AdminBundle\\Controller\\UserController::deleteAction',  '_admin' => 'group',));
            }

        }

        elseif (0 === strpos($pathinfo, '/process')) {
            // sidus_admin.process.list
            if ('/process' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sidus_admin.process.list');
                }

                return array (  '_controller' => 'CleverAge\\EAVManager\\AdminBundle\\Controller\\GenericAdminController::listAction',  '_admin' => 'process',  '_route' => 'sidus_admin.process.list',);
            }

            // sidus_admin.process.show
            if (preg_match('#^/process/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sidus_admin.process.show')), array (  '_controller' => 'CleverAge\\EAVManager\\AdminBundle\\Controller\\GenericAdminController::showAction',  '_admin' => 'process',));
            }

            // sidus_admin.process.delete
            if (preg_match('#^/process/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sidus_admin.process.delete')), array (  '_controller' => 'CleverAge\\EAVManager\\AdminBundle\\Controller\\GenericAdminController::deleteAction',  '_admin' => 'process',));
            }

        }

        // eavmanager_user.profile.edit
        if ('/profile' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'eavmanager_user.profile.edit');
            }

            return array (  '_controller' => 'CleverAge\\EAVManager\\UserBundle\\Controller\\UserProfileController::editAction',  '_route' => 'eavmanager_user.profile.edit',);
        }

        if (0 === strpos($pathinfo, '/task')) {
            // sidus_admin.task.list
            if ('/task' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sidus_admin.task.list');
                }

                return array (  '_controller' => 'CleverAge\\EAVManager\\AdminBundle\\Controller\\GenericAdminController::listAction',  '_admin' => 'task',  '_route' => 'sidus_admin.task.list',);
            }

            // sidus_admin.task.show
            if (preg_match('#^/task/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sidus_admin.task.show')), array (  '_controller' => 'CleverAge\\EAVManager\\AdminBundle\\Controller\\GenericAdminController::showAction',  '_admin' => 'task',));
            }

            // sidus_admin.task.delete
            if (preg_match('#^/task/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sidus_admin.task.delete')), array (  '_controller' => 'CleverAge\\EAVManager\\AdminBundle\\Controller\\GenericAdminController::deleteAction',  '_admin' => 'task',));
            }

        }

        elseif (0 === strpos($pathinfo, '/tree')) {
            // sidus_admin.tree.index
            if ('/tree' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sidus_admin.tree.index');
                }

                return array (  '_controller' => 'CleverAge\\EAVManager\\AdminBundle\\Controller\\EAVDataController::indexAction',  '_admin' => 'tree',  '_route' => 'sidus_admin.tree.index',);
            }

            // sidus_admin.tree.list
            if (preg_match('#^/tree/(?P<familyCode>[^/]++)/list$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sidus_admin.tree.list')), array (  '_controller' => 'CleverAge\\EAVManager\\AdminBundle\\Controller\\EAVDataController::listAction',  '_admin' => 'tree',));
            }

            // sidus_admin.tree.create
            if (preg_match('#^/tree/(?P<familyCode>[^/]++)/create$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sidus_admin.tree.create')), array (  '_controller' => 'CleverAge\\EAVManager\\AdminBundle\\Controller\\EAVDataController::createAction',  '_admin' => 'tree',));
            }

            // sidus_admin.tree.edit
            if (preg_match('#^/tree/(?P<familyCode>[^/]++)/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sidus_admin.tree.edit')), array (  '_controller' => 'CleverAge\\EAVManager\\AdminBundle\\Controller\\EAVDataController::editAction',  '_admin' => 'tree',));
            }

            // sidus_admin.tree.clone
            if (preg_match('#^/tree/(?P<familyCode>[^/]++)/(?P<id>[^/]++)/clone$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sidus_admin.tree.clone')), array (  '_controller' => 'CleverAge\\EAVManager\\AdminBundle\\Controller\\EAVDataController::cloneAction',  '_admin' => 'tree',));
            }

            // sidus_admin.tree.delete
            if (preg_match('#^/tree/(?P<familyCode>[^/]++)/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sidus_admin.tree.delete')), array (  '_controller' => 'CleverAge\\EAVManager\\AdminBundle\\Controller\\EAVDataController::deleteAction',  '_admin' => 'tree',));
            }

        }

        elseif (0 === strpos($pathinfo, '/variant')) {
            // sidus_admin.variant.select
            if (preg_match('#^/variant/(?P<attribute>[^/]++)/(?P<parentId>[^/]++)/select$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sidus_admin.variant.select')), array (  '_controller' => 'CleverAge\\EAVManager\\AdminBundle\\Controller\\VariantController::selectAction',  '_admin' => 'variant',));
            }

            // sidus_admin.variant.create
            if (preg_match('#^/variant/(?P<attribute>[^/]++)/(?P<parentId>[^/]++)/(?P<familyCode>[^/]++)/create$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sidus_admin.variant.create')), array (  '_controller' => 'CleverAge\\EAVManager\\AdminBundle\\Controller\\VariantController::createAction',  '_admin' => 'variant',));
            }

            // sidus_admin.variant.edit
            if (preg_match('#^/variant/(?P<attribute>[^/]++)/(?P<parentId>[^/]++)/(?P<familyCode>[^/]++)/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sidus_admin.variant.edit')), array (  '_controller' => 'CleverAge\\EAVManager\\AdminBundle\\Controller\\VariantController::editAction',  '_admin' => 'variant',));
            }

            // sidus_admin.variant.delete
            if (preg_match('#^/variant/(?P<attribute>[^/]++)/(?P<parentId>[^/]++)/(?P<familyCode>[^/]++)/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sidus_admin.variant.delete')), array (  '_controller' => 'CleverAge\\EAVManager\\AdminBundle\\Controller\\VariantController::deleteAction',  '_admin' => 'variant',));
            }

        }

        elseif (0 === strpos($pathinfo, '/_')) {
            if (0 === strpos($pathinfo, '/_data')) {
                // sidus_admin._data.create
                if (preg_match('#^/_data/(?P<familyCode>[^/]++)/create$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sidus_admin._data.create')), array (  '_controller' => 'CleverAge\\EAVManager\\AdminBundle\\Controller\\InlineEAVDataController::createAction',  '_admin' => '_data',));
                }

                // sidus_admin._data.edit
                if (preg_match('#^/_data/(?P<familyCode>[^/]++)/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sidus_admin._data.edit')), array (  '_controller' => 'CleverAge\\EAVManager\\AdminBundle\\Controller\\InlineEAVDataController::editAction',  '_admin' => '_data',));
                }

                // sidus_admin._data.editInline
                if (preg_match('#^/_data/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sidus_admin._data.editInline')), array (  '_controller' => 'CleverAge\\EAVManager\\AdminBundle\\Controller\\InlineEAVDataController::editInlineAction',  '_admin' => '_data',));
                }

                // sidus_admin._data.delete
                if (preg_match('#^/_data/(?P<familyCode>[^/]++)/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sidus_admin._data.delete')), array (  '_controller' => 'CleverAge\\EAVManager\\AdminBundle\\Controller\\InlineEAVDataController::deleteAction',  '_admin' => '_data',));
                }

            }

            elseif (0 === strpos($pathinfo, '/_a')) {
                // eavmanager_asset.media.url
                if (0 === strpos($pathinfo, '/_asset') && preg_match('#^/_asset/(?P<id>[^/]++)/(?P<filter>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'eavmanager_asset.media.url')), array (  '_controller' => 'CleverAge\\EAVManager\\AssetBundle\\Controller\\MediaController::mediaUrlAction',));
                }

                // sidus_autocomplete_api_attribute_search
                if (0 === strpos($pathinfo, '/_autocomplete/search/attribute') && preg_match('#^/_autocomplete/search/attribute/(?P<attributePath>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sidus_autocomplete_api_attribute_search')), array (  '_controller' => 'sidus_eav_bootstrap.controller.autocomplete:attributeSearchAction',));
                }

                // sidus_autocomplete_api_family_search
                if (0 === strpos($pathinfo, '/_autocomplete/search/family') && preg_match('#^/_autocomplete/search/family/(?P<familyCode>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sidus_autocomplete_api_family_search')), array (  '_controller' => 'sidus_eav_bootstrap.controller.autocomplete:familySearchAction',));
                }

            }

            // _uploader_upload_image
            if ('/_uploader/image/upload' === $pathinfo) {
                if (!in_array($requestMethod, array('POST', 'PUT', 'PATCH'))) {
                    $allow = array_merge($allow, array('POST', 'PUT', 'PATCH'));
                    goto not__uploader_upload_image;
                }

                return array (  '_controller' => 'oneup_uploader.controller.image:upload',  '_format' => 'json',  '_route' => '_uploader_upload_image',);
            }
            not__uploader_upload_image:

            // _uploader_upload_document
            if ('/_uploader/document/upload' === $pathinfo) {
                if (!in_array($requestMethod, array('POST', 'PUT', 'PATCH'))) {
                    $allow = array_merge($allow, array('POST', 'PUT', 'PATCH'));
                    goto not__uploader_upload_document;
                }

                return array (  '_controller' => 'oneup_uploader.controller.document:upload',  '_format' => 'json',  '_route' => '_uploader_upload_document',);
            }
            not__uploader_upload_document:

        }

        elseif (0 === strpos($pathinfo, '/wysiwyg/data-selector')) {
            // eavmanager_admin.wysiwyg.data_selector.media
            if ('/wysiwyg/data-selector/datamedia' === $pathinfo) {
                return array (  '_controller' => 'CleverAge\\EAVManager\\AdminBundle\\Controller\\WysiwygController::selectMediaAction',  '_route' => 'eavmanager_admin.wysiwyg.data_selector.media',);
            }

            // eavmanager_admin.wysiwyg.data_selector
            if (preg_match('#^/wysiwyg/data\\-selector/(?P<configName>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'eavmanager_admin.wysiwyg.data_selector')), array (  '_controller' => 'CleverAge\\EAVManager\\AdminBundle\\Controller\\WysiwygController::selectDataAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/login')) {
            // login
            if ('/login' === $pathinfo) {
                return array (  '_controller' => 'CleverAge\\EAVManager\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
            }

            // lost_password
            if ('/login/lost-password' === $pathinfo) {
                return array (  '_controller' => 'CleverAge\\EAVManager\\UserBundle\\Controller\\SecurityController::lostPasswordAction',  '_route' => 'lost_password',);
            }

            // reset_password
            if ('/login/reset-password' === $pathinfo) {
                return array (  '_controller' => 'CleverAge\\EAVManager\\UserBundle\\Controller\\SecurityController::resetPasswordAction',  '_route' => 'reset_password',);
            }

        }

        // logout
        if ('/logout' === $pathinfo) {
            return array('_route' => 'logout');
        }

        // sidus_file_upload.file.download
        if (0 === strpos($pathinfo, '/fileupload') && preg_match('#^/fileupload/(?P<type>[^/]++)/download/(?P<identifier>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sidus_file_upload.file.download')), array (  '_controller' => 'Sidus\\FileUploadBundle\\Controller\\FileController::downloadAction',));
        }

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
        }

        // myeml_model.context_switcher
        if ('/context' === $pathinfo) {
            return array (  '_controller' => 'MyEML\\EAVModelBundle\\Controller\\EAVModelController::indexAction',  '_route' => 'myeml_model.context_switcher',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
