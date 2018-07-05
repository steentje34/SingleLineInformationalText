<?php
namespace Stanford\SingleLineInformationalText;

use ExternalModules\AbstractExternalModule;
use ExternalModules\ExternalModules;

class SingleLineInformationalText extends AbstractExternalModule
{
	function hook_every_page_top($project_id)
	{
			?>
			<style>
                .label_l {
                    position: sticky;
                    top: 0;
                    left: 10%;
                    display: block;
                    color: white;
                    /*padding: 4px;*/
                    width: 100% !important;
                    z-index: 99 !important;
                }
                .warning_l {
                    background-color:<?php echo $this->getSystemSetting('alert-background-css');?>;
                    color:<?php echo $this->getSystemSetting('alert-text-css');?>;
                } /* Orange */
            </style>
			<script>
                $('document').ready(function(){
                    var text= "<div id=\"span-label_l\" class=\"label_l warning_l\"><span><?php echo $this->getSystemSetting('alert-message');?></span></div>";
                    $("body").prepend(text);
                   $(".navbar-fixed-top").css('top','18px');
                });
            </script>
			<?php
	}
}


