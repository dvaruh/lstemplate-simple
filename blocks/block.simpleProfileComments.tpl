{if $simpletpl_aCommentsProfile and count($simpletpl_aCommentsProfile)}
<div class="user-profile-comments">

	<div class="zagolovok">
		<h2>{$aLang.comments_h2}</h2>
		<a href="{$oUserProfile->getUserWebPath()}created/comments/">{$aLang.all_comments}</a>
	</div>


	{include file='comment_list.tpl' aComments=$simpletpl_aCommentsProfile}

</div>
{/if}