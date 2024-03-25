$(document).ready(function() 
{
	// controls all basic processes


	function clickActiveAJAX(scope = "html")
	{
		let clickAJAX = $(scope).find(".init-click");
		clickAJAX.each(element =>
		{
			let has_attribute = element.attr('content_url') !== undefined;
			if(has_attribute)
			{
				let content_url = element.attr("content_url");
			}

			element.on("click", function()
			{

			});
		});
	}

	function checkAttribute(html_element ,attr_name, assign_to)
	{
		// note this is a procedure using an argument with ".value" will change the value of the argument
		let element = $(html_element);
		let has_attribute = element.attr(attr_name) !== undefined;
		if(has_attribute)
		{
			assign_to.value = element.attr(attr_name);
		}
	}
});