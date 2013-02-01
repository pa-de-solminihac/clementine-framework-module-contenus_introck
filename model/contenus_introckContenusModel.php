<?php
/**
 * contenus_introckContenusModel : gestion de contenus
 *
 * @package 
 * @version $id$
 * @copyright 
 * @author Pierre-Alexis <pa@quai13.com> 
 * @license 
 */
class contenus_introckContenusModel extends contenus_introckContenusModel_Parent
{

    /**
     * updateContenuHtmlCkeditor : update le contenu $id_content de type "contenu_html_introck"
     * 
     * @param mixed $id_content 
     * @param mixed $contenu_html 
     * @access public
     * @return void
     */
    public function updateContenuHtmlIntrock ($id_content, $contenu_html, $contenu_html_introck, $lang) 
    {
        $id_content = (int) $id_content; 
        if ($cms = $this->getModel('cms')) {
            $contenu_html = $cms->escape_content($contenu_html);
            $contenu_html_introck = $cms->escape_content($contenu_html_introck);
        }
        $db = $this->getModel('db');
        $sql  = "INSERT INTO " . $this->table_cms_contenu . "_html_introck (`id`, `lang`, `contenu_html`, `contenu_html_introck`) 
                 VALUES ('$id_content', '$lang', '" . $db->escape_string($contenu_html) . "', '" . $db->escape_string($contenu_html_introck) . "') 
                 ON DUPLICATE KEY UPDATE `contenu_html` = '" . $db->escape_string($contenu_html) . "', `contenu_html_introck` = '" . $db->escape_string($contenu_html_introck) . "' "; 
        $stmt = $db->query($sql);
    }

}
?>
