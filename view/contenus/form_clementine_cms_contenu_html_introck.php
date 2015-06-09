        <p class="form_content_edit_content_html_introck">
            <label>Intro</label>
            <textarea class="form-control" name="contenu_html"><?php 
    if (isset($data['contenu_html'])) { 
        echo $this->getModel('fonctions')->htmlentities($data['contenu_html']); 
    } else {
        if ($this->canGetBlock('contenus_introck/default_contenu_html')) {
            $this->getBlock('contenus_introck/default_contenu_html', $data);
        }
    }
?></textarea>
        </p>
        <p class="form_content_edit_content_html_introck">
            <label>Texte</label>
            <textarea class="form-control editor" name="contenu_html_introck"><?php 
    if (isset($data['contenu_html_introck'])) { 
        echo $this->getModel('fonctions')->htmlentities($data['contenu_html_introck']); 
    } else {
        if ($this->canGetBlock('contenus_introck/default_contenu_html_introck')) {
            $this->getBlock('contenus_introck/default_contenu_html_introck', $data);
        }
    }
?></textarea>
        </p>
