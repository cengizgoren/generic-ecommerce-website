<?php
/**
 * TagWidget creates a tag form / auto complete
 *
 * @version 0.1
 * @author Chris
 * @link http://con.cept.me
 */
class TagWidget extends CWidget {

    /**
     * Html ID
     * @var string
     */
    public $id = 'tagWidget';

    /**
     * Initial tags
     * @var array
     */
    public $tags;

    /**
     * The array representing options in dropdown
     * @var array
     */
    //public $url;
	public $data;//array of value=>display elements
    
    public function init()
    {
        // this method is called by CController::beginWidget()
    }

    public function run()
    {
        $this->tags = json_encode($this->tags);
        // this method is called by CController::endWidget()
        $this->render('TagView', array(
            'id' => $this->id,
            'tags' => $this->tags,
            //'url' => $this->url
            'data' => $this->data
        ));
    }
}