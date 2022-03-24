<?php
// W skrypcie definicji kontrolera nie trzeba dołączać problematycznego skryptu config.php,
// ponieważ będzie on użyty w miejscach, gdzie config.php zostanie już wywołany.

require_once $conf->root_path.'/lib/smarty/Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';
require_once $conf->root_path.'/app/CalcForm.class.php';
require_once $conf->root_path.'/app/CalcResult.class.php';


class CredCtrl {

	private $msgs;   		//wiadomości dla widoku
	private $form;   		//dane formularza (do obliczeń i dla widoku)
	private $result; 		//inne dane dla widoku
	private $hide_intro; 	//zmienna informująca o tym czy schować intro

	
	public function __construct(){
		
		$this->msgs = new Messages();
		$this->form = new CalcForm();
		$this->result = new CalcResult();
		$this->hide_intro = false;
	}
	
	
	public function getParams(){
		$this->form->Kwota = isset($_REQUEST ['Kwota']) ? $_REQUEST ['Kwota'] : null;
		$this->form->Lata = isset($_REQUEST ['Lata']) ? $_REQUEST ['Kwota'] : null;
		$this->form->Procent = isset($_REQUEST ['Procent']) ? $_REQUEST ['Procent'] : null;
	}
	
	
	public function validate() {
		
		if (! (isset ( $this->form->x ) && isset ( $this->form->y ) && isset ( $this->form->op ))) {
			
			return false; //zakończ walidację z błędem
		} else { 
			$this->hide_intro = true; 
		}
		
		
		if ($this->form->Kwota == "") {
			$this->msgs->addError('Nie podano Kwoty');
		}
		if ($this->form->Lata == "") {
			$this->msgs->addError('Nie podano Procentu');
		}
		if ($this->form->Procent == "") {
			$this->msgs->addError('Nie podano ilości lat');
		}
		
		
		if (! $this->msgs->isError()) {
			
			
			if (! is_numeric ( $this->form->Kwota )) {
				$this->msgs->addError('Pierwsza wartość nie jest liczbą całkowitą');
			}
			
			if (! is_numeric ( $this->form->Lata )) {
				$this->msgs->addError('Druga wartość nie jest liczbą całkowitą');
			}
			if (! is_numeric ( $this->form->Procent )) {
				$this->msgs->addError('Trzecia wartość nie jest liczbą całkowitą');
			}
		}
		
		return ! $this->msgs->isError();
	}
	
	
	public function process(){

		$this->getparams();
		
		if ($this->validate()) {
				
			//konwersja parametrów na int
			$this->form->Kwota = intval($this->form->Kwota);
			$this->form->Lata = intval($this->form->LAta);
			$this->form->Procent = intval($this->form->Procent);
			$this->msgs->addInfo('Parametry poprawne.');
				
			

			$this->result->result = ($this->form->Kwota + ($this->form->Kwota*($this->form->Procent/100)))/$this->form->Lata*12;
			
			
			
			$this->msgs->addInfo('Wykonano obliczenia.');
		}
		
		$this->genView();
	}
	
	
	
	public function genView(){
		global $conf;
		
		$smarty = new Smarty();
		$smarty->assign('conf',$conf);
		
		$smarty->assign('page_title','Kalkulator Kredytowy');
		$smarty->assign('page_description','Obiektowość. Funkcjonalność aplikacji zamknięta w metodach różnych obiektów. Pełen model MVC.');
		$smarty->assign('page_header','Obiekty w PHP');
				
		$smarty->assign('hide_intro',$this->hide_intro);
		
		$smarty->assign('msgs',$this->msgs);
		$smarty->assign('form',$this->form);
		$smarty->assign('res',$this->result);
		
		$smarty->display($conf->root_path.'/app/view_cred.html');
	}
}
