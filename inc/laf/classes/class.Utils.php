<?php
class Utils {
	public function debug($a) {
		echo '<pre>';
		var_dump($a);
		echo '</pre>';
	}

	public function nl2p($string, $line_breaks = true) {
		$string = str_replace(array('<p>', '</p>', '<br>', '<br />'), '', $string);

		// It is conceivable that people might still want single line-breaks
		// without breaking into a new paragraph.
		if ($line_breaks == true)
		    return '<p>'.preg_replace(array("/([\n]{2,})/i", "/([^>])\n([^<])/i"), array("</p>\n<p>", '$1</p><p>$2'), trim($string)).'</p>';
		else 
		    return '<p>'.preg_replace(
		    array("/([\n]{2,})/i", "/([\r\n]{3,})/i","/([^>])\n([^<])/i"),
		    array("</p>\n<p>", "</p>\n<p>", '$1</p><p>$2'), 
		    trim($string)).'</p>'; 
	}

	public function getArquivoOfTarefaByAnoIdSerieId($ano_id, $serie_id, $tarefas_array)
	{
		$tarefas_encontradas = false;
		foreach ($tarefas_array as $tarefa_id => $tarefa_obj) :
			if($ano_id == $tarefa_obj->getAnoId() && $serie_id == $tarefa_obj->getSerieId()) :
				$tarefas_encontradas = $tarefa_obj->getArquivo();
			endif;
		endforeach;
		return $tarefas_encontradas;
	}

	public function isPostType( $tipo ){
		global $wp_query;
		$return = ($tipo == get_post_type($wp_query->post->ID)) ? true : false;
		return $return;
	}
}