(function( $ ) {
  $.widget( "custom.tooltipX", $.ui.tooltip, {
    options: {
        autoShow: true,
        autoHide: true
    },

    _create: function() {
      this._super();
      if(!this.options.autoShow){
        this._off(this.element, "mouseover focusin");
      }
    },

    _open: function( event, target, content ) {
      this._superApply(arguments);

      if(!this.options.autoHide){
        this._off(target, "mouseleave focusout");
      }
    }
  });

}( jQuery ) );
jQuery( window ).load( function () {
	function display_notice( tutorial ) {
			jQuery( "#survey_name" ).addClass( "tooltip-wizard wizard-step1" ).addClass( "tooltip-wizard wizard-start" );
			jQuery( "#survey_name" ).attr( "data-title", "<p>You didn't create any survey. Type the name of your survey here, then click on the new survey button.</p><div class='wizard-controls'><a href='#' class='ms-wizard-close button button-secondary button-small'>Close</a><a href='#' class='ms-wizard button button-secondary button-small' data-step='start'>Next</a></div>" );		
	}
	function set_tutorial( tutorial ) {
		if ( tutorial == 'survey-form' ) {
			if ( jQuery( "#wp_sap_accordion fieldset>legend:first" ).length == 0 ) {
				display_notice('survey-form');
			}
			else {
				jQuery( ".wizard-start" ).tooltipX( "destroy" );
				jQuery( ".wizard-start" ).attr( "data-title", "" );
			}
			jQuery( "#wp_sap_accordion fieldset>legend:first" ).addClass( "tooltip-wizard wizard-step1" );
			jQuery( "#wp_sap_accordion fieldset>legend:first" ).attr( "data-title", "<p>Find the general options of the survey in the Survey Options box.</p><div class='wizard-controls'><a href='#' class='ms-wizard-close button button-secondary button-small'>Close</a><a href='#' class='ms-wizard button button-secondary button-small' data-step='2'>Next</a></div>" );
			
			jQuery( "#wp_sap_accordion .expiry_time:first" ).addClass( "tooltip-wizard wizard-step2" );
			jQuery( "#wp_sap_accordion .expiry_time:first" ).attr( "data-title", "<p>You can set start and expiry time for the survey to display it in a specified period.</p><div class='wizard-controls'><a href='#' class='ms-wizard-close button button-secondary button-small'>Close</a><a href='#' class='ms-wizard button button-secondary button-small' data-step='1'>Back</a><a href='#' class='ms-wizard button button-secondary button-small' data-step='3'>Next</a></div>" );
			
			jQuery( "#wp_sap_accordion .display_style:first" ).addClass( "tooltip-wizard wizard-step3" );
			jQuery( "#wp_sap_accordion .display_style:first" ).attr( "data-title", "<p>Choose the Survey vertical position on the screen in Modal Mode. This option doesn't matter when you embed the survey to the content.</p><div class='wizard-controls'><a href='#' class='ms-wizard-close button button-secondary button-small'>Close</a><a href='#' class='ms-wizard button button-secondary button-small' data-step='2'>Back</a><a href='#' class='ms-wizard button button-secondary button-small' data-step='4'>Next</a></div>" );
			
			jQuery( "#wp_sap_accordion .global_survey:first" ).addClass( "tooltip-wizard wizard-step4" );
			jQuery( "#wp_sap_accordion .global_survey:first" ).attr( "data-title", "<p>Check this option to ON to display the survey on all pages. Don't forget to uncheck this box, when you include the survey with shortcode.</p><div class='wizard-controls'><a href='#' class='ms-wizard-close button button-secondary button-small'>Close</a><a href='#' class='ms-wizard button button-secondary button-small' data-step='3'>Back</a><a href='#' class='ms-wizard button button-secondary button-small' data-step='5'>Next</a></div>" );
			
			jQuery( "#wp_sap_accordion .shortcode_section:first" ).addClass( "tooltip-wizard wizard-step5" );
			jQuery( "#wp_sap_accordion .shortcode_section:first" ).attr( "data-title", "<p>Copy and paste this shortcode to display the survey on a specified page only.</p><div class='wizard-controls'><a href='#' class='ms-wizard-close button button-secondary button-small'>Close</a><a href='#' class='ms-wizard button button-secondary button-small' data-step='4'>Back</a><a href='#' class='ms-wizard button button-secondary button-small' data-step='6'>Next</a></div>" );
			
			jQuery( "#wp_sap_accordion .add_question:first" ).addClass( "tooltip-wizard wizard-step6" );
			jQuery( "#wp_sap_accordion .add_question:first" ).attr( "data-title", "<p>Add new questions with this button.</p><div class='wizard-controls'><a href='#' class='ms-wizard-close button button-secondary button-small'>Close</a><a href='#' class='ms-wizard button button-secondary button-small' data-step='5'>Back</a><a href='#' class='ms-wizard button button-secondary button-small' data-step='7'>Next</a></div>" );
					
			jQuery( "#wp_sap_accordion .add_answer:first img" ).addClass( "tooltip-wizard wizard-step7" );
			jQuery( "#wp_sap_accordion .add_answer:first img" ).attr( "data-title", "<p>New Answers can be added by the green plus icon.</p><div class='wizard-controls'><a href='#' class='ms-wizard-close button button-secondary button-small'>Close</a><a href='#' class='ms-wizard button button-secondary button-small' data-step='6'>Back</a><a href='#' class='ms-wizard button button-secondary button-small' data-step='8'>Next</a></div>" );
			
			jQuery( "#wp_sap_accordion .save_survey:first" ).addClass( "tooltip-wizard wizard-step8" );
			jQuery( "#wp_sap_accordion .save_survey:first" ).attr( "data-title", "<p>Save the survey with the SAVE button. If the Survey already created, the button text will be change to UPDATE. Click on the RESET to clear all votes and allow users to participate in the survey again.</p><div class='wizard-controls'><a href='#' class='ms-wizard-close button button-secondary button-small'>Close</a><a href='#' class='ms-wizard button button-secondary button-small' data-step='7'>Back</a><a href='#' class='ms-wizard button button-secondary button-small' data-step='9'>Next</a></div>" );
			
			jQuery( "#wp_sap_accordion .thankyou:first" ).addClass( "tooltip-wizard wizard-step9" );
			jQuery( "#wp_sap_accordion .thankyou:first" ).attr( "data-title", "<p>Type your message here to display at the end of the survey. It can even contains HTML, JavaScript or CSS codes.</p><div class='wizard-controls'><a href='#' class='ms-wizard-close button button-secondary button-small'>Close</a><a href='#' class='ms-wizard button button-secondary button-small' data-step='8'>Back</a><a href='#' class='ms-wizard button button-secondary button-small' data-step='10'>Next</a></div>" );
					
			jQuery( "#wp_sap_accordion .play_button img:first" ).addClass( "tooltip-wizard wizard-step10" );
			jQuery( "#wp_sap_accordion .play_button img:first" ).attr( "data-title", "<p>Try out your survey with the play button, this mode doesn't save the votes.</p><div class='wizard-controls'><a href='#' class='ms-wizard-close button button-secondary button-small'>Close</a><a href='#' class='ms-wizard button button-secondary button-small' data-step='9'>Back</a><a href='#' class='ms-wizard button button-secondary button-small' data-step='11'>Next</a></div>" );
			
			jQuery( ".manual" ).addClass( "tooltip-wizard wizard-step11" );
			jQuery( ".manual" ).attr( "data-title", "<p>If you still have questions, read more informations in the help section. High ratings are very important to motivate us releasing new features, please rate the plugin if you like it! Pro version provides tons of new fetures, click on the Go Pro button to read more details.</p><div class='wizard-controls'><a href='#' class='ms-wizard-close button button-secondary button-small'>Close</a><a target='_blank' href='https://wordpress.org/support/plugin/wp-survey-and-poll' class='button button-secondary button-small'>Support</a><a target='_blank' href='https://wordpress.org/support/view/plugin-reviews/wp-survey-and-poll?rate=5#postform' class='button button-secondary button-small'>Rate</a><a target='_blank' href='http://codecanyon.net/item/modal-survey-wordpress-poll-survey-quiz-plugin/6533863?ref=pantherius' style='width: 90%;margin-top: 5px;' class='button button-primary button-small'>Go Pro</a></div>" );
		}
		jQuery( ".tooltip-wizard" ).tooltipX({
			content: function () {
			  return jQuery( this ).attr( 'data-title' );
			},
			items: "[data-title]",
			show: { effect: "drop", duration: 300 },
			hide: { effect: "drop", duration: 100 },
			autoShow:false, 
			autoHide:false,
			position: {
			my: "center bottom-20",
			at: "center top",
			using: function( position, feedback ) {
			  jQuery( this ).css( position );
			  jQuery( "<div class='ms-tooltip-custom'>" )
				.addClass( "arrow" )
				.addClass( feedback.vertical )
				.addClass( feedback.horizontal )
				.appendTo( this );
			}
		  }
		});	
	}

	jQuery( document ).on( "click", ".ms-wizard-close", function() {
			jQuery( ".tooltip-wizard" ).tooltipX( "close" );		
			if ( jQuery( ".ms_accordion_more_api h4" ).hasClass( "ui-state-active" ) ) {
				jQuery( ".ms_accordion_more_api h4" ).trigger( "click" );
			}
	})
	jQuery( document ).on( "click", ".ms-wizard", function(event) {
		event.preventDefault();
		var thiselem = jQuery( this );
		var step = thiselem.attr( "data-step" );
		if ( step == "start" ) {
			jQuery( ".ms-wizard" ).trigger( "click" );
			return;
		}
		if ( step == 1 ) {
			set_tutorial( thiselem.attr( "data-tutorial" ) );
		}
		jQuery( ".tooltip-wizard" ).tooltipX( "close" );
		jQuery( "html, body" ).animate( { scrollTop: parseInt( jQuery( ".wizard-step" + step ).offset().top ) - 300 }, 500, 'swing', function() {
			jQuery( ".wizard-step" + thiselem.attr( "data-step" ) ).tooltipX( "open" );
		});
		if ( step == 14 ) {
			if ( ! jQuery( ".participants_form h4" ).hasClass( "ui-state-active" ) ) {
				jQuery( ".participants_form h4" ).trigger( "click" );
			}
		}
	}) 
})