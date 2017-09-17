<?php 
namespace Application\Block\ViewEvent;
use Concrete\Core\Block\BlockController;


defined('C5_EXECUTE') or die(_("Access Denied."));

class Controller extends BlockController
{
    protected $btTable = 'btViewEvent';
    

    public function getBlockTypeDescription()
    {
        return t("Shows the Events");
    }

    public function getBlockTypeName()
    {
        return t("View Events");
    }

    public function add()
    {
    }

    public function edit()
    {
    }

    public function view(){
	
		
    }

    public function delete()
    {

    }

    public function save($args)
    {

    }
    

}