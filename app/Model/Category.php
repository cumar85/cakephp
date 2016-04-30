<?
class Category extends AppModel {
	public $hasMany = 'Post';

	public $validate = [
		'title' => [
			'notBlank' => [
				'rule' => 'notBlank',
				'message' => 'title mast not be empty'
			],
			'between' => [
                'rule' => ['lengthBetween', 5, 15],
                'message' => 'Between 5 to 15 characters'
			],
		],


		'body' => [
			'notBlank' => [
				'rule' => 'notBlank',
				'message' => 'body mast not be empty'
			],
		'between' => [
                'rule' => ['lengthBetween', 5, 15],
                'message' => 'Between 5 to 15 characters'
			],
		],
	];
}
