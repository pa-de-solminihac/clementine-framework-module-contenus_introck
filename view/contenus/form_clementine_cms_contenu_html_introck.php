        <p class="form_content_edit_content_html_introck">
            <label>Intro</label>
            <textarea name="contenu_html"><?php 
    if (isset($data['contenu_html'])) { 
        echo $this->getModel('fonctions')->htmlentities($data['contenu_html']); 
    }
?></textarea>
        </p>
        <p class="form_content_edit_content_html_introck">
            <label>Texte</label>
            <textarea class="editor" name="contenu_html_introck"><?php 
    if (isset($data['contenu_html_introck'])) { 
        echo $this->getModel('fonctions')->htmlentities($data['contenu_html_introck']); 
    }
?></textarea>
        </p>
