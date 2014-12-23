/**
 * @license Copyright © 2013 Stuart Sillitoe <stuart@vericode.co.uk>
 * This work is mine, and yours. You can modify it as you wish.
 *
 * Stuart Sillitoe
 * stuartsillitoe.co.uk
 *
 */

CKEDITOR.plugins.add('strinsert',
{
	requires : ['richcombo'],
	init : function( editor )
	{
		//  array of strings to choose from that'll be inserted into the editor
		var strings = [];
		strings.push(['[[sFirst Name]]', 'First Name', 'First Name']);
		strings.push(['[[sMiddle Name]]', 'Middle Name', 'Middle Name']);
		strings.push(['[[sLast Name]]', 'Last Name', 'Last Name']);
		strings.push(['[[sFull Name]]', 'Full Name', 'Full Name']);
		strings.push(['[[sCompany Name]]', 'Company Name', 'Company Name']);
		strings.push(['[[sMobile No]]', 'Mobile No', 'Mobile No']);
		strings.push(['[[sFax No]]', 'Fax No', 'Fax No']);
		strings.push(['[[sTelephone No]]', 'Telephone No', 'Telephone No']);

		var strings2 = [];
		strings2.push(['[[rCompany Name]]', 'Company Name', 'Company Name']);
		strings2.push(['[[rFirst Name]]', 'First Name', 'First Name']);
		strings2.push(['[[rMiddle Name]]', 'Middle Name', 'Middle Name']);
		strings2.push(['[[rLast Name]]', 'Last Name', 'Last Name']);
		strings2.push(['[[rFull Name]]', 'Full Name', 'Full Name']);		
		strings2.push(['[[rMobile No]]', 'Mobile No', 'Mobile No']);
		strings2.push(['[[rFax No]]', 'Fax No', 'Fax No']);
		strings2.push(['[[rTelephone No]]', 'Telephone No', 'Telephone No']);
		strings2.push(['[[rCompany Name]]', 'Company Name', 'Company Name']);
		strings2.push(['[[rAddress1]]', 'Address1', 'Address1']);
		strings2.push(['[[rSubcommunity]]', 'Subcommunity', 'Subcommunity']);
		strings2.push(['[[rCommunity]]', 'Community', 'Community']);
		strings2.push(['[[rCity]]', 'City', 'City']);
		strings2.push(['[[rP.O.Box]]', 'P.O. Box#', 'P.O. Box#']);
		strings2.push(['[[rE-mail]]', 'E-mail', 'E-mail']);

		var strings3 = [];				
		strings3.push(['[[bProject Name]]', 'Project Name', 'Project Name']);
		strings3.push(['[[bUnit No]]', 'Unit No', 'Unit No']);
		strings3.push(['[[bApartment Type]]', 'Apartment Type', 'Apartment Type']);
		strings3.push(['[[bTower No]]', 'Tower No', 'Tower No']);
		strings3.push(['[[bAddress1]]', 'Address1', 'Address1']);
		strings3.push(['[[bAddress2]]', 'Address2', 'Address2']);
		strings3.push(['[[bAddress3]]', 'Address3', 'Address3']);		
		strings3.push(['[[bSubcommunity]]', 'Subcommunity', 'Subcommunity']);
		strings3.push(['[[bCommunity]]', 'Community', 'Community']);
		strings3.push(['[[bCity]]', 'City', 'City']);
		strings3.push(['[[bCountry]]', 'Country', 'Country']);
		strings3.push(['[[bLocation Code]]', 'Location Code', 'Location Code']);
		strings3.push(['[[bP.O.Box]]', 'P.O. Box#', 'P.O. Box#']);



		// add the menu to the editor
		editor.ui.addRichCombo('strinsert',
		{
			label: 		'SL Placeholder',
			title: 		'SL Placeholder',
			voiceLabel: 'SL Placeholder',
			className: 	'cke_format mergefields',
			//className: 'mergefields',
			multiSelect:false,
			panel:
			{
				css: [ editor.config.contentsCss, CKEDITOR.skin.getPath('editor') ],
				voiceLabel: editor.lang.panelVoiceLabel
			},

			init: function()
			{
				this.startGroup( "Sender Info" );
				for (var i in strings)
				{
					this.add(strings[i][0], strings[i][1], strings[i][2]);
				}
				this.startGroup( "Reciever Info" );
				for (var i in strings2)
				{
					this.add(strings2[i][0], strings2[i][1], strings2[i][2]);
				}
				this.startGroup( "R.E. Info" );
				for (var i in strings3)
				{
					this.add(strings3[i][0], strings3[i][1], strings3[i][2]);
				}
			},

			onClick: function( value )
			{
				editor.focus();
				editor.fire( 'saveSnapshot' );
				editor.insertHtml(value);
				editor.fire( 'saveSnapshot' );
			}
		});
	}
});