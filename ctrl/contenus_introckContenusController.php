<?php
/**
 * contenus_introckContenusController : gestion de contenus
 *
 * @package 
 * @version $id$
 * @copyright 
 * @author Pierre-Alexis <pa@quai13.com> 
 * @license 
 */
class contenus_introckContenusController extends contenus_introckContenusController_Parent
{

    /**
     * editcontenuAction : formulaire d'edition de contenu : charge les javascript supplementaires
     * 
     * @access public
     * @return void
     */
    function editcontenuAction ()
    {
        // recupere le contenu du script a injecter dans le footer
        $script = $this->getBlockHtml('contenus/jquery_introck_replace');
        // charge les javascripts necessaires
        $this->getModel('cssjs')->register_js('jquery', array('src' => 'https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js'));
        $this->getModel('cssjs')->register_js('ckeditor', array('src' => __WWW_ROOT_JSTOOLS__ . '/skin/js/ckeditor/ckeditor.js'));
        $this->getModel('cssjs')->register_js('jquery.ckeditor', array('src' => __WWW_ROOT_JSTOOLS__ . '/skin/js/ckeditor/adapters/jquery.js'));
        // javascript de configuration de ckeditor
        $this->getModel('cssjs')->register_foot('jquery.ckeditor.replace', $script);
        // execute le controleur normal
        return parent::editcontenuAction();
    }

    /**
    * Function : valid_clementine_cms_contenu_html_introckAction() 
    * 
    */
    function valid_clementine_cms_contenu_html_introckAction() 
    {
        if ($this->getModel('users')->needPrivilege('manage_contents')) {
            $ns = $this->getModel('fonctions');
            if (!empty($_POST)) {
                $type_content = 'clementine_cms_contenu_html_introck';
                $id           = $ns->ifPost('int', 'id');
                $id_zone      = $ns->ifPost('int', 'id_zone');
                $id_page      = $ns->ifPost('int', 'id_page');
                $nom          = $ns->ifPost('html', 'nom');
                $contenu_html = $ns->ifPost('html', 'contenu_html');
                $contenu_html_introck = $ns->ifPost('html', 'contenu_html_introck');
                $contenus = $this->getModel('contenus');
                // ajoute le contenu s'il n'existe pas deja
                $request = $this->getRequest();
                $lang = $request['LANG'];
                if (!$id) {
                    $id = $contenus->addContenu($nom, $type_content, $id_zone, $id_page, $lang);
                }
                if ($this->set_contenu_defaut($id)) {
                    $contenus->updateContenuHtmlIntrock($id, $contenu_html, $contenu_html_introck, $lang);
                }
            }
            if ($id_page) {
                $ns->redirect(__WWW__ . '/cms/editpage?id=' . $id_page);
            } else {
                $ns->redirect(__WWW__ . '/cms');
            }
        } else {
            $this->getModel('fonctions')->redirect(__WWW__);
        }
    }
}
?>
