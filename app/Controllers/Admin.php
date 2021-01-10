<?php namespace App\Controllers;

use Dompdf\Dompdf;


class Admin extends BaseController
{
	public function index()
	{
        //return view('welcome_message');
        echo "hola yo  soy admin ";
    }
    
    public function login() { 
        echo view('General/header');
		echo view('Admin/navbarl');
        echo view('Admin/login');
		echo view('General/footer');
		echo view('General/end');
    }

    public  function auntenticar(){
        echo "hola soy auntenticar";
    }

    public function error($a){
           switch($a){
            case '401':
                echo view('Admin/401');
                break;
            case '403':
                echo view('Admin/403');
                break;  
            case '404':
                echo view('Admin/404');
                break;
            case '405':
                echo view('Admin/405');
                break;        
            case '500':
                echo view('Admin/500');   
                break;        
            case '501':
                echo view('Admin/501');   
                break; 
                        
            case '502':
                echo view('Admin/502');   
                break; 
                        
            case '503':
                echo view('Admin/503');   
                break; 
                        
            case '504':
                echo view('Admin/504');   
                break; 
                    
            case '505':
                echo view('Admin/505');   
                break;  
        }
    }

    public function principal(){    
            echo view('General/header');
            echo view('Admin/principal');
		    echo view('General/end');
    
    }


    public function eventos(){
        echo view('General/header');
        echo view('Admin/eventos');
        echo view('Admin/modal');
        echo view('General/end');
       
    }


    public function noticias(){
        echo view('General/header');
        echo view('Admin/noticias');
        echo view('Admin/modal');
        echo view('General/end');
    }

    public function alertas(){
        echo view('General/header');
        echo view('Admin/alertas');
        echo view('Admin/modal');
        echo view('General/end');
    }

    public function usuarios(){
        echo view('General/header');
        echo view('Admin/usuarios');
        echo view('Admin/modal');
        echo view('General/end');
    }


    public function descargarpdf($text){
               

        // instantiate and use the dompdf class
        $dompdf = new Dompdf();
        $dompdf->loadHtml('hello world');

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream();
    }
	//--------------------------------------------------------------------

}


































































