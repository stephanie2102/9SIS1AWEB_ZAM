@charset "UTF-8";

/* --- bb_code.css --- */

/* .bbCodeX classes are designed to exist inside .baseHtml. ie: they have no CSS reset applied */

.bbCodeBlock
{
	margin: 1em 0;
border: 1px solid rgb(240, 240, 240);
border-radius: 5px;
overflow: auto;

}

	.bbCodeBlock .bbCodeBlock,
	.hasJs .bbCodeBlock .bbCodeSpoilerText,
	.messageList.withSidebar .bbCodeBlock
	{
		margin-right: 0;
	}

	/* mini CSS reset */
	.bbCodeBlock pre,
	.bbCodeBlock blockquote
	{
		margin: 0;
	}
	
	.bbCodeBlock img
	{
		border: none;
	}

.bbCodeBlock .type
{
	font-size: 12px;
font-family: Helvetica, Arial, sans-serif;
color: rgb(148, 148, 148);
background-color: rgb(240, 240, 240);
padding: 3px 8px;
border-bottom: 1px solid rgb(210, 210, 210);
border-top-left-radius: 4px;
border-top-right-radius: 4px;

}

.bbCodeBlock pre,
.bbCodeBlock .code
{
	font-size: 10pt;
font-family: Consolas, 'Courier New', Courier, monospace;
background-color: rgb(240, 240, 240);
padding: 10px;
border-radius: 5px;
word-wrap: normal;
overflow: auto;
line-height: 1.24;
min-height: 30px;
max-height: 500px;
_width: 600px;
direction: ltr;

}

.bbCodeBlock .code
{
	white-space: nowrap;
}

.bbCodeQuote
{
	border-color: rgb(240, 240, 240);
overflow: auto;

}

.bbCodeQuote .attribution
{
	color: rgb(51, 51, 51);
background-color: rgb(240, 240, 240);
border-bottom: 1px solid rgb(235, 235, 235);

}

.bbCodeQuote .quoteContainer
{
	overflow: hidden;
	position: relative;
	
	font-style: italic;
font-size: 9pt;
background-color: rgb(240, 240, 240);
padding: 10px;
border-radius: 4px;

}


	.bbCodeQuote .quoteContainer .quote
	{
		max-height: 150px;
		overflow: hidden;
		padding-bottom: 1px;
	}
	
		.NoJs .bbCodeQuote .quoteContainer .quote
		{
			max-height: none;
		}

	.bbCodeQuote .quoteContainer .quoteExpand
	{		
		display: none;
		box-sizing: border-box;
		position: absolute;
		height: 80px;
		top: 90px;
		left: 0;
		right: 0;
		
		font-size: 11px;
		line-height: 1;
		text-align: center;
		color: rgb(235, 235, 235);
		cursor: pointer;
		padding-top: 65px;
		background: -webkit-linear-gradient(top, rgba(240, 240, 240, 0) 0%, rgb(240, 240, 240) 80%);
		background: -moz-linear-gradient(top, rgba(240, 240, 240, 0) 0%, rgb(240, 240, 240) 80%);
		background: -o-linear-gradient(top, rgba(240, 240, 240, 0) 0%, rgb(240, 240, 240) 80%);
		background: linear-gradient(to bottom, rgba(240, 240, 240, 0) 0%, rgb(240, 240, 240) 80%);
		
		border-bottom-left-radius: 4px;
		border-bottom-right-radius: 4px;
	}
	
	.bbCodeQuote .quoteContainer .quoteExpand.quoteCut
	{
		display: block;
	}
	
	.bbCodeQuote .quoteContainer.expanded .quote
	{
		max-height: none;
	}
	
	.bbCodeQuote .quoteContainer.expanded .quoteExpand
	{
		display: none;
	}


	.bbCodeQuote img
	{
		max-height: 150px;
	}
	
	.bbCodeQuote iframe,
	.bbCodeQuote .fb_iframe_widget,
	.bbCodeQuote object,
	.bbCodeQuote embed
	{
		max-width: 200px;
		max-height: 150px;
	}
	
	.bbCodeQuote iframe:-webkit-full-screen
	{
		max-width: none;
		max-height: none;
	}
	
	.bbCodeQuote iframe:-moz-full-screen
	{
		max-width: none;
		max-height: none;
	}
	
	.bbCodeQuote iframe:-ms-fullscreen
	{
		max-width: none;
		max-height: none;
	}
	
	.bbCodeQuote iframe:fullscreen
	{
		max-width: none;
		max-height: none;
	}
	
.bbCodeSpoilerButton
{
	margin: 5px 0;
	max-width: 99%;
}

	.bbCodeSpoilerButton > span
	{
		display: inline-block;
		max-width: 100%;
		white-space: nowrap;
		text-overflow: ellipsis;
		overflow: hidden;
	}
	
.hasJs .bbCodeSpoilerText
{
	display: none;
	background-color: rgb(240, 240, 240);
padding: 5px;
margin-top: 5px;
margin-right: 140px;
margin-bottom: 5px;
border: 1px solid rgb(240, 240, 240);
border-radius: 5px;
overflow: auto;

}

	.hasJs .bbCodeSpoilerText .bbCodeSpoilerText,
	.hasJs .bbCodeSpoilerText .bbCodeBlock,
	.hasJs .messageList.withSidebar .bbCodeSpoilerText
	{
		margin-right: 0;
	}
	
.NoJs .bbCodeSpoilerContainer
{
	background-color: rgb(51, 51, 51); /* fallback for browsers without currentColor */
	background-color: currentColor;
}

	.NoJs .bbCodeSpoilerContainer > .bbCodeSpoilerText
	{
		visibility: hidden;
	}

	.NoJs .bbCodeSpoilerContainer:hover
	{
		background-color: transparent;
	}
	
		.NoJs .bbCodeSpoilerContainer:hover > .bbCodeSpoilerText
		{
			visibility: visible;
		}


@media (max-width:1280px)
{
	.Responsive .bbCodeBlock,
	.Responsive.hasJs .bbCodeSpoilerText
	{
		margin-right: 0;
	}
}


/* --- likes_summary.css --- */

.likesSummary
{
	overflow: hidden; zoom: 1;
	font-size: 11px;
}

	.LikeText
	{
		float: left;
	}
	
	.likeInfo
	{
		float: right;
	}

/* --- message.css --- */



.messageList
{
	
}

.messageList .message
{
	padding-top: 15px;
padding-bottom: 15px;
border-top: 1px solid rgb(185, 185, 185);

}

/* clearfix */ .messageList .message { zoom: 1; } .messageList .message:after { content: '.'; display: block; height: 0; clear: both; visibility: hidden; }

/*** Message block ***/

.message .messageInfo
{
	padding: 0;
margin-left: 140px;
border-bottom: 1px none black;

	zoom: 1;
}

	.message .newIndicator
	{
		font-size: 11px;
color: rgb(51, 51, 51);
background-color: rgb(210, 210, 210);
padding: 1px 5px;
margin: -5px -5px 5px 5px;
border: 1px solid rgb(210, 210, 210);
border-radius: 3px;
border-top-right-radius: 0px;
display: block;
float: right;
position: relative;
box-shadow: 1px 1px 3px rgba(0,0,0, 0.25);

		
		margin-right: -5px;
	}
	
		.message .newIndicator span
		{
			background-color: rgb(210, 210, 210);
border-top-right-radius: 3px;
position: absolute;
top: -4px;
right: -1px;
width: 5px;
height: 4px;

		}

	.message .messageContent
	{
		padding-bottom: 2px;
min-height: 100px;
overflow: hidden;
*zoom: 1;

	}
	
	.message .messageTextEndMarker
	{
		height: 0;
		font-size: 0;
		overflow: hidden;
	}
	
	.message .editDate
	{
		text-align: right;
		margin-top: 5px;
		font-size: 11px;
		color: rgb(150, 150, 150);
	}

	.message .signature
	{
		font-size: 9pt;
color: rgb(150, 150, 150);
padding: 5px 0 0;
margin-top: 5px;
border-top: 1px dashed rgb(210, 210, 210);

	}

	.message .messageMeta
	{
		font-size: 12px;
padding: 15px 5px 5px;
margin: -5px;
overflow: hidden;
zoom: 1;

	}

		.message .privateControls
		{
			float: left;

		}

		.message .publicControls
		{
			float: right;

		}
		
			.message .privateControls .item
			{
				margin-right: 10px;
				float: left;
			}

				.message .privateControls .item:last-child
				{
					margin-right: 0;
				}

			.message .publicControls .item
			{
				margin-left: 10px;
				float: left;
			}
	
				.message .messageMeta .control
				{
					
				}
				
					.message .messageMeta .control:focus
					{
						
					}
				
					.message .messageMeta .control:hover
					{
						
					}
				
					.message .messageMeta .control:active
					{
						
					}
	/*** multiquote +/- ***/
			
	.message .publicControls .MultiQuoteControl
	{
		padding-left: 4px;
		padding-right: 4px;
		border-radius: 2px;
		margin-left: 6px;
		margin-right: -4px;
	}
	
	
	.message .publicControls .MultiQuoteControl.active
	{
		background-color: rgb(240, 240, 240);
	}
	
		.messageNotices li
	{
		font-size: 12px;
background-color: rgb(240, 240, 240);
padding: 5px;
margin: 10px 0;
border: 1px solid rgb(240, 240, 240);
border-radius: 5px;
line-height: 16px;

	}
	
		.messageNotices .icon
		{
			float: right;
			width: 16px;
			height: 16px;
			background: url('styles/UnitySkin/xenforo/xenforo-ui-sprite.png') no-repeat 1000px 1000px;
		}
	
			.messageNotices .warningNotice .icon { background-position: -48px -32px; }		
			.messageNotices .deletedNotice .icon { background-position: -64px -32px; }		
			.messageNotices .moderatedNotice .icon {background-position: -32px -16px; }
	
	.message .likesSummary
	{
		padding: 5px;
margin-top: 10px;
border: 1px solid rgb(240, 240, 240);
border-radius: 5px;

	}
	
	.message .messageText > *:first-child
	{
		margin-top: 0;
	}

/* inline moderation changes */

.InlineModChecked .messageUserBlock,
.InlineModChecked .messageInfo,
.InlineModChecked .messageNotices,
.InlineModChecked .bbCodeBlock .type,
.InlineModChecked .bbCodeBlock blockquote,
.InlineModChecked .attachedFiles .attachedFilesHeader,
.InlineModChecked .attachedFiles .attachmentList
{
	background-color: rgb(255, 255, 200);

}

.InlineModChecked .messageUserBlock div.avatarHolder,
.InlineModChecked .messageUserBlock .extraUserInfo
{
	background: transparent;
}

.InlineModChecked .messageUserBlock .arrow span
{
	border-left-color: rgb(255, 255, 200);
}

/* message list */

.messageList .newMessagesNotice
{
	margin: 10px auto;
	padding: 5px 10px;
	border-radius: 5px;
	border: 1px solid rgb(210, 210, 210);
	background: rgb(240, 240, 240) url(styles/UnitySkin/xenforo/gradients/category-23px-light.png) repeat-x top;
	font-size: 11px;
}

/* deleted / ignored message placeholder */

.messageList .message.placeholder
{
}

.messageList .placeholder .placeholderContent
{	
	overflow: hidden; zoom: 1;
	color: rgb(114, 114, 114);
	font-size: 11px;
}

	.messageList .placeholder a.avatar
	{
		float: left;
		display: block;
	}
	
		.messageList .placeholder a.avatar img
		{
			display: block;
			width: 32px;
			height: 32px;
		}
		
	.messageList .placeholder .privateControls
	{
		margin-top: -5px;
	}
	

/* messages remaining link */

.postsRemaining a,
a.postsRemaining
{
	font-size: 11px;
	color: rgb(150, 150, 150);
}


@media (max-width:1280px)
{
	.Responsive .message .newIndicator
	{
		margin-right: 0;
		border-top-right-radius: 3px;
	}
	
		.Responsive .message .newIndicator span
		{
			display: none;
		}
}

@media (max-width:766px)
{
	.Responsive .message .messageInfo
	{
		margin-left: 0;
		padding: 0 10px;
	}

	.Responsive .message .messageContent
	{
		min-height: 0;
	}	

	.Responsive .message .newIndicator
	{
		margin-right: -5px;
		margin-top: -16px;
	}

	.Responsive .message .postNumber,
	.Responsive .message .authorEnd
	{
		display: none;
	}
	
	.Responsive .message .signature
	{
		display: none;
	}
	
	.Responsive .messageList .placeholder a.avatar
	{
		margin-right: 10px;
	}
}


/* --- message_user_info.css --- */

.messageUserInfo
{
	float: left;
width: 124px;

}

	.messageUserBlock
	{
		
		
		position: relative;
	}
		
		.messageUserBlock div.avatarHolder
		{
			padding-right: 10px;
padding-left: 10px;

			
			position: relative;	
		}
		
			.messageUserBlock div.avatarHolder .avatar
			{
				display: block;
				font-size: 0;
			}
			
			.messageUserBlock div.avatarHolder .onlineMarker
			{
				position: absolute;
				top: -1px;
				left: 9px;
				
				border: 7px solid transparent;
border-top-color: rgb(127, 185, 0);
border-left-color: rgb(127, 185, 0);
border-top-left-radius: 5px;
border-top-right-radius: 3px;
border-bottom-left-radius: 3px;

			}
			
		.messageUserBlock h3.userText
		{
			padding-top: 5px;
padding-right: 10px;
padding-left: 10px;

		}
		
		.messageUserBlock .userBanner
		{
			display: block;
			margin-bottom: 5px;
			margin-left: -16px;
			margin-right: -16px;
		}
		
		.messageUserBlock .userBanner:last-child
		{
			margin-bottom: 0;
		}
	
		.messageUserBlock a.username
		{
			font-weight: bold;
font-size: 10pt;
display: block;
overflow: hidden;

			
		}
		
		.messageUserBlock .userTitle
		{
			font-size: 15px;
display: block;

		}
		
		.messageUserBlock .extraUserInfo
		{
			font-size: 11px;
padding-right: 10px;
padding-bottom: 5px;
padding-left: 10px;

		}
		
			.messageUserBlock .extraUserInfo dl
			{
				margin: 2px 0 0;
			}
							
			.messageUserBlock .extraUserInfo img
			{
				max-width: 100%;
			}
		
		.messageUserBlock .arrow
		{
			position: absolute;
			top: 10px;
			right: -10px;
			
			display: block;
			width: 0px;
			height: 0px;
			line-height: 0px;
			
			border: 10px solid transparent;
			border-left-color: ;
			-moz-border-left-colors: ;
			border-right: none;
			
			/* Hide from IE6 */
			_display: none;
		}
		
			.messageUserBlock .arrow span
			{
				position: absolute;
				top: -10px;
				left: -11px;
				
				display: block;
				width: 0px;
				height: 0px;
				line-height: 0px;
				
				border: 10px solid transparent;
				border-left-color: ;
				-moz-border-left-colors: ;
				border-right: none;
			}


@media (max-width:766px)
{
	.Responsive .messageUserInfo
	{
		float: none;
		width: auto; 
	}

	.Responsive .messageUserBlock
	{
		overflow: hidden;
		margin-bottom: 5px;
		position: relative;
	}

	.Responsive .messageUserBlock div.avatarHolder
	{
		float: left;
		padding: 5px;
	}

		.Responsive .messageUserBlock div.avatarHolder .avatar img
		{
			width: 48px;
			height: 48px;
		}
		
		.Responsive .messageUserBlock div.avatarHolder .onlineMarker
		{
			top: 4px;
			left: 4px;
			border-width: 6px;
		}

	.Responsive .messageUserBlock h3.userText
	{
		margin-left: 64px;
	}
	
	.Responsive .messageUserBlock .userBanner
	{
		max-width: 150px;
		margin-left: 0;
		margin-right: 0;
		border-top-left-radius: 3px;
		border-top-right-radius: 3px;
		position: static;
		display: inline-block;
	}
	
		.Responsive .messageUserBlock .userBanner span
		{
			display: none;
		}

	.Responsive .messageUserBlock .extraUserInfo
	{
		display: none;
	}

	.Responsive .messageUserBlock .arrow
	{
		display: none;
	}
}


/* --- notices.css --- */

.hasJs .FloatingContainer .Notice
{
	display: none;
}

.FloatingContainer
{
	position: fixed;
	width: 300px;
	z-index: 9997;
	top: auto;
	left: auto;
	bottom: 0;
	right: 20px;
}

.Notices .Notice .blockImage
{
	padding: 10px 0 5px 10px;
}

.Notices .Notice .blockImage,
.FloatingContainer .floatingImage
{
	float: left;
}

.Notices .Notice .blockImage img,
.FloatingContainer .floatingImage img
{
	max-width: 48px;
	max-height: 48px;
}

.Notices .hasImage,
.FloatingContainer .hasImage
{
	margin-left: 64px;
	min-height: 52px;
}

.FloatingContainer .floatingItem
{
	display: block;
	padding: 10px;
	font-size: 11px;
	position: relative;
	margin-bottom: 20px;
	border: 1px solid transparent;
	border-radius: 6px;
	box-shadow: 1px 1px 3px rgba(0,0,0, 0.25);
}

.FloatingContainer .floatingItem.primary
{
	background-color: rgb(240, 240, 240);
	border-color: rgb(210, 210, 210);
}

.FloatingContainer .floatingItem.secondary
{
	color: rgb(82, 132, 189);
	background-color: rgb(235, 235, 235);
	border-color: rgb(240, 240, 240);
}

.FloatingContainer .floatingItem.dark
{
	color: #fff;
	background: black;
	background: url(rgba.php?r=0&g=0&b=0&a=204); background: rgba(0,0,0, 0.8); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#CC000000,endColorstr=#CC000000);
	border-color: #333;
}

.FloatingContainer .floatingItem.light
{
	color: #000;
	background: white;
	background: url(rgba.php?r=255&g=255&b=255&a=204); background: rgba(255,255,255, 0.8); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#CCFFFFFF,endColorstr=#CCFFFFFF);
	border-color: #ddd;
}

.FloatingContainer .floatingItem .title
{
	font-size: 14px;
	padding-bottom: 5px;
	font-weight: bold;
	display: block;
}

.FloatingContainer .floatingItem .DismissCtrl
{
	position: static;
	float: right;
	margin-left: 5px;
	margin-right: -5px;
	margin-top: -5px;
}

.Notices
{
	display: none;
}

/* cookie notice */
.Notice.notice_-1 .noticeCookiesContent .noticeCookiesContentRow
{
	text-align: center;
}

.Notice.notice_-1 .noticeCookiesContent .noticeCookiesContentRow.noticeCookiesContentButtonRow
{
	margin-top: 10px;
}


	@media (max-width:1280px)
	{
		.Responsive .Notice.wide { display: none !important; }

		/* cookie notice */
		.Responsive .Notice.notice_-1 .noticeContent
		{
			padding: 3px 3px 10px 3px;
		}

		.Responsive .Notice.notice_-1 .noticeCookiesContent .noticeCookiesContentRow
		{
			font-size: 12px;
		}

		.Responsive .Notice.notice_-1 .noticeCookiesContent .noticeCookiesContentRow.noticeCookiesContentButtonRow .button
		{
			font-size: 11px;
			padding: 0px 4px;
			border-radius: 5px;
		}
	}
	
	@media (max-width:979px)
	{
		.Responsive .Notice.medium { display: none !important; }
	}
	
	@media (max-width:766px)
	{
		.Responsive .Notice.narrow { display: none !important; }
		
		.Responsive .FloatingContainer
		{
			right: 50%;
			margin-right: -150px;
		}
	}


/* --- panel_scroller.css --- */

.hasJs .Notices.PanelScroller { display: none; }

.PanelScroller .scrollContainer,
.PanelScrollerOff .panel
{
	background-color: rgb(255, 255, 255);
padding: 3px;
margin-bottom: 10px;
border: 1px solid rgb(210, 210, 210);
border-radius: 5px;
font-size: 13pt;

}

.PanelScroller .PanelContainer
{
	position: relative;
	clear: both;
	width: 100%;
	overflow: auto;
}

	.hasJs .PanelScroller .Panels
	{
		position: absolute;
	}

	.PanelScroller .Panels
	{
		clear: both;
		margin: 0;
		padding: 0;
	}
	
		.PanelScroller .panel,
		.PanelScrollerOff .panel
		{
			overflow: hidden;
			position: relative;
			padding: 0 !important;

			background-color: rgb(240, 240, 240);
padding: 10px;

		}
			
		.PanelScroller .panel .noticeContent,
		.PanelScrollerOff .panel .noticeContent
		{
			padding: 10px;
		}

/** panel scroller nav **/

.PanelScroller .navContainer
{
	margin: -11px 21px 10px;
overflow: hidden;
zoom: 1;

}

.PanelScroller .navControls
{
	float: right;
}

/* clearfix */ .PanelScroller .navControls { zoom: 1; } .PanelScroller .navControls:after { content: '.'; display: block; height: 0; clear: both; visibility: hidden; }

	.PanelScroller .navControls a
	{
		font-size: 12px;
background-color: rgb(240, 240, 240);
padding: 3px 6px 2px;
margin-left: -1px;
float: left;
display: block;
position: relative;

		
		border: 1px solid rgb(210, 210, 210);
border-radius: 5px;
		border-radius: 0;
	}
	
		.PanelScroller .navControls > a:first-child
		{
			border-bottom-left-radius: 5px;
		}
		
		.PanelScroller .navControls > a:last-child
		{
			border-bottom-right-radius: 5px;
		}
		
		.PanelScroller .navControls a:hover
		{
			text-decoration: none;
background-color: rgb(240, 240, 240);

		}
		
		.PanelScroller .navControls a.current
		{
			background-color: rgb(240, 240, 240);

		}
		
			.PanelScroller .navControls a .arrow
			{
				display: none;
			}
			
			.PanelScroller .navControls a.current span
			{
				display: block;
				line-height: 0px;
				width: 0px;
				height: 0px;
				border-top: 5px solid rgb(210, 210, 210);
				border-right: 5px solid transparent;
				border-bottom: 1px none black;
				border-left: 5px solid transparent;
				-moz-border-bottom-colors: rgb(210, 210, 210);
				position: absolute;
			}
			
			.PanelScroller .navControls a.current .arrow
			{
				border-top-color: rgb(210, 210, 210);
				top: 0px;
				left: 50%;
				margin-left: -5px;
			}
			
				.PanelScroller .navControls a .arrow span
				{
					border-top-color: rgb(255, 255, 255);
					top: -6px;
					left: -5px;
				}
				
/* notices */

.Notices .panel .noticeContent
{
	padding-right: 25px;
}

.bottomFixer .PanelScroller .panel,
.bottomFixer .PanelScrollerOff .panel
{
	margin-bottom: 0;
	border-radius: 0;
}

/* --- thread_view.css --- */

.thread_view .threadAlerts
{
	border: 1px solid rgb(240, 240, 240);
	border-radius: 5px;
	font-size: 11px;
	margin: 10px 0;
	padding: 5px;
	line-height: 16px;
	background-image: url('styles/UnitySkin/xenforo/gradients/form-button-white-25px.png');
}
	
	.thread_view .threadAlerts dt
	{
		color: rgb(148, 148, 148);
		display: inline;
	}
	
	.thread_view .threadAlerts dd
	{
		color: rgb(49, 49, 49);
		font-weight: bold;
		display: inline;
	}
	
		.thread_view .threadAlerts .icon
		{
			float: right;
			width: 16px;
			height: 16px;
			margin-left: 5px;
			background: url('styles/UnitySkin/xenforo/xenforo-ui-sprite.png') no-repeat -1000px -1000px;
		}
		
			.thread_view .threadAlerts .deletedAlert .icon { background-position: -64px -32px; }
			.thread_view .threadAlerts .moderatedAlert .icon { background-position: -32px -16px; }
			.thread_view .threadAlerts .lockedAlert .icon { background-position: -16px -16px; }
	
.thread_view .threadAlerts + * > .messageList
{
	border-top: none;
}

.thread_view .threadNotices
{
	background-color: rgb(240, 240, 240);
	border: 1px solid rgb(210, 210, 210);
	border-radius: 5px;
	padding: 10px;
	margin: 10px auto;
}

.thread_view .InlineMod
{
	overflow: hidden; zoom: 1;
}
