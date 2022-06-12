<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

use App\Classes\General;
use App\Models\DataGame;

class GameController extends BaseController {
    
    /*
     * @ Título: Principal - Vista del juego
     * Descripción
     * En esta función se inicializa el juego y se muestran las 3 partes:
     * 1. Selección de jugadores
     * 2. Jugar al ahorcado
     * 3. Mostrar resultados
     * */
    
    /* FUNCIONES AJAX PARA EL JUEGO */
    
    public function start(Request $request) {
    	
    	$General = new General();
    	$DataGame = new DataGame();
    	
    	$title = "Penjat - Edició Online Marvel";        
    	$General->get_array_avatares();
    	
    	$array_data = $DataGame->obtain_();
    	$html_game_paso2 = $DataGame->get_html_game_paso2($array_data, $request); 
    	$html_game_paso3 = $DataGame->get_html_game_paso3($array_data, $request); 
    	
    	return view('start', compact('request', 'title', 'array_data', 'html_game_paso2', 'html_game_paso3'));
    	
    }
    
    /*
     * @ Título: Función Ajax de Parte 1
     * Descripción
     * Muestra el listado de jugadores según la cantidad seleccionada
     * */
    
    public function mostrar_jugadores(Request $request) {
    	
    	$num_jugadors = $request->num_jugadors;
    	$html_game_paso1 = view('parts.part1_jugador', compact('request', 'num_jugadors'));
    	
    	echo $html_game_paso1;
    	
    }
    
    /*
     * @ Título: Función Ajax de Parte 1
     * Descripción
     * Actualiza el objeto DataGame con los datos introducidos y carga los jugadores para empezar a jugar
     * Creamos jugador con los siguientes parametros:
     * - Nombre e Imagen (introducidos por el usuario)
     * - abc: Abecedario para controlar las letras introducidas
     * - status: Estado (0 si está jugando y 1 si ha terminado el turno)
     * - trys: Número máximo de intentos en 5
     * - word: Palabra seleccionada aleatoriamente para el juego
     * - word_keygen: Palabra dividida por caracteres para controlar acierto/error
     * */
    
    public function guardar_jugadores(Request $request) {
    	
    	$General = new General();
    	$DataGame = new DataGame();
    	
    	$array_data = $DataGame->obtain_();
    	$array_data = $DataGame->start_gaming($array_data, $request);    	
    	$html_game_paso2 = $DataGame->get_html_game_paso2($array_data, $request);
    	
    	echo $html_game_paso2;
    	
    }
    
    /*
     * @ Título: Función Ajax de Jugando en Parte 2
     * Descripción
     * Envíamos una letra de un jugador y comprobamos en la array word_keygen para ver el progreso del juego
     * */
     
    public function comprobar_letra(Request $request) {
        
        $General = new General();
        $DataGame = new DataGame();
        
        $array_data = $DataGame->obtain_();
        $respuesta = $DataGame->gaming_and_searching($array_data, $request);
        
        echo json_encode($respuesta);
        
    }
    
    /*
     * @ Título: Función Ajax de Jugando en Parte 2
     * Descripción
     * Todos los jugadores han terminado su turno, mostramos pantalla con resultados
     * */
    
    public function terminar_juego(Request $request) {
        
        $General = new General();
        $DataGame = new DataGame();
        
        $array_data = $DataGame->obtain_();
        $array_data = $DataGame->close_game($array_data);
        
        /* Cargamos parte final */
        $html_game_paso3 = $DataGame->get_html_game_paso3($array_data, $request); 
        echo $html_game_paso3;
        
    }
    
    /*
     * @ Título: Función Ajax de Jugando en Parte 3
     * Descripción
     * En la pantalla de resultados, escogemos si queremos una revancha o si empezamos otro juego con otros jugadores
     * */
    
    public function reiniciar(Request $request) {
        
        $General = new General();
        $DataGame = new DataGame();
        
        if($request->type == "comenzar_nuevo") { $DataGame->delete_(); }
        else {
            $array_data = $DataGame->obtain_();
            $DataGame->restart_($array_data);
        }
        
        return redirect("/");
        
    }
    
}