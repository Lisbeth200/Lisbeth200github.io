    <?php
           class Menus extends CI_Controller
           {

             function __construct()
             {
               parent::__construct();
             }
             //Renderización de la vista question
             // muestra los desayunos
             public function desayunos(){
               $this->load->view('header');
               $this->load->view('menus/desayunos');
               $this->load->view('footer');
             }
             public function almuerzos(){
               $this->load->view('header');
               $this->load->view('menus/almuerzos');
               $this->load->view('footer');
             }
             public function meriendas(){
               $this->load->view('header');
               $this->load->view('menus/meriendas');
               $this->load->view('footer');
             }
             
            
            public function historias(){
              $this->load->view('header');
              $this->load->view('menus/historias');
              $this->load->view('footer');
            }
          
          public function pagos(){
            $this->load->view('header');
            $this->load->view('menus/pagos');
            $this->load->view('footer');
          }
        
        }//NO BORRAR EL CIERRE DE LA CLASE

    ?>
