<?php

class view
{
    private $_file;
    private $_css;
    private $_t;

    public function __construct($action)
    {
        $this->_file = 'views/view'.$action.'.php';
        $this->_css = 'views/'.$action.'.css';
    }


    //Génére et affiche la vue
    public function generate($data=NULL)
    {
        $content = $this->generateFile($this->_file, $data);

        $view = $this->generateFile('views/template.php',array('t'=> $this->_t, 'content'=> $content));

        echo $view;
    }


    //Génére un fichier vue et renvoie le résultat produit
    private function generateFile($file, $data)
    {
        if (file_exists($file))
        {
            if ($data)
                extract($data);


            require($file);?>
            <style>
            <?php include $this->_css; ?>
            </style><?php

        }
        else
            throw new Exception ('Fichier'.$file.' introuvable');
    }
}