<?php
App::uses('AppController', 'Controller');
/**
 * Dashboard Controller
 *
 * @property Dashboard $Dashboard
 * @property PaginatorComponent $Paginator
 */
class DashboardController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() { 
		$this->loadModel('Business');
		$this->Business->recursive = 0;
		//pr($this->paginate('Business'));die;
		$this->set('businesses',$this->paginate('Business'));

	}

/**
 * Get average ratings
 */

	public function averageRatings ($businessId){
		$this->loadModel('BusinessReview');
		//get one star ratings
		$oneStart = $this->BusinessReview->find('count', array(
				    'fields' => array('BusinessReview.ratingstar'),
				    'conditions' => array("BusinessReview.ratingstar" => '1' ,"BusinessReview.business_id" => $businessId) 
				)); 
		//get two star ratings
		$twoStart = $this->BusinessReview->find('count', array(
				    'fields' => array('BusinessReview.ratingstar'),
				    'conditions' => array("BusinessReview.ratingstar" => '2' ,"BusinessReview.business_id" => $businessId) 
				)); 
		//get three star ratings
		$threeStart = $this->BusinessReview->find('count', array(
				    'fields' => array('BusinessReview.ratingstar'),
				    'conditions' => array("BusinessReview.ratingstar" => '3' ,"BusinessReview.business_id" => $businessId) 
				)); 
		//get four star ratings
		$fourStart = $this->BusinessReview->find('count', array(
				    'fields' => array('BusinessReview.ratingstar'),
				    'conditions' => array("BusinessReview.ratingstar" => '4' ,"BusinessReview.business_id" => $businessId) 
				)); 
		//get five star ratings
		$fiveStart = $this->BusinessReview->find('count', array(
				    'fields' => array('BusinessReview.ratingstar'),
				    'conditions' => array("BusinessReview.ratingstar" => '5' ,"BusinessReview.business_id" => $businessId) 
				)); 
		//get total stars
		$totalStars = $this->BusinessReview->find('count', array(
		    'fields' => array('BusinessReview.ratingstar'),
		    'conditions' => array("BusinessReview.business_id" => $businessId) 
		)); 

		if($totalStars == 0){
			return 'No Ratings';	
		}
		$averageRatings = (5*$fiveStart + 4*$fourStart + 3*$threeStart + 2*$twoStart + 1*$oneStart) / $totalStars;
		
		return $averageRatings;
	} 

/**
 * Get last review date
 **/
	
	public function lastReviewDate($businessId) {
			$this->loadModel('BusinessReview');
			$reviewDate = $this->BusinessReview->find('all', array(
			    'fields' => array('BusinessReview.ratingdate'),
			    'conditions' => array("BusinessReview.business_id" => $businessId) ,
			    'order' => array('BusinessReview.ratingdate DESC') 
			)); 

			if(isset($reviewDate) && !empty($reviewDate)) 
				return $reviewDate[0]['BusinessReview']['ratingdate'];
			else
				return 'No Reviews';
	}
/**
 * Get total review
 **/
	
	public function totalReviews($businessId) {
			$this->loadModel('BusinessReview');
			$allReviews = $this->BusinessReview->find('count', array(
			    'fields' => array('BusinessReview.ratingdate'),
			    'conditions' => array("BusinessReview.business_id" => $businessId) 
			)); 

			return $allReviews;
	}

/**
 * Search business
 **/

	public function searchBusiness() { 
		//when press submit
		if($this->request->is('post')){
			$searchValue = $this->request->data['searchForm']['search'];
			$this->loadModel('Business');
			$this->Business->recursive = 0;
			$this->paginate = array(
					    'conditions' => array(
					    'Business.businessname LIKE' => "%$searchValue%"));
			$this->set('businesses',$this->paginate('Business'));
			$this->set('selectedTab', 'feedback');
			return $this -> render('index');
		//if get request redirect to index
		}else {
			$this->redirect( '/dashboard' );
		}
	}
/**
 * manage Buiseness User
 **/

	public function manageUser() { 
		if(isset($this->request->data['searchForm']['search'])){
			$searchValue=$this->request->data['searchForm']['search'];
			$this->loadModel('Business');
			$this->Business->recursive = 0;
			$this->paginate = array(
					    'conditions' => array(
					    'Business.businessname LIKE' => "%$searchValue%"));
			$this->set('businesses',$this->paginate('Business'));
			$this->set('businesses',$this->paginate('Business'));			
		}else{
			$this->loadModel('Business');
			$this->Business->recursive = 0;
			$this->set('businesses',$this->paginate('Business'));			
		}
	}

/**
 * Search business user
 **/

	public function searchBusinessUser() { 
		//when press submit
		if($this->request->is('post')){
			$searchValue = $this->request->data['searchFormUser']['search'];
			$this->loadModel('Business');
			$this->Business->recursive = 0;
			$this->paginate = array(
					    'conditions' => array(
					    'Business.businessname LIKE' => "%$searchValue%"));
			$this->set('businesses',$this->paginate('Business'));
			$this->set('selectedTab', 'users');
			return $this -> render('index');
		//if get request redirect to index
		}else {
			$this->redirect( '/dashboard' );
		}
	}


/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Business->exists($id)) {
			throw new NotFoundException(__('Invalid business'));
		}
		$options = array('conditions' => array('Business.' . $this->Business->primaryKey => $id));
		$this->set('business', $this->Business->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		
	}
}
