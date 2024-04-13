$(document).ready(function() 
{
	// controls all basic processes


	function clickActiveAJAX(scope = "html")
	{
		let clickAJAX = $(scope).find(".init-click");
		clickAJAX.each(element =>
		{
			let content_url = assignAttr(element, "content_url");
			let save_url = assignAttr(element, "save_url");
			let success_function = assignAttr(element, "success_function");

			if(content_url && save_url)
			{
				element.on("click", function()
				{
					element.ajax()
				});
			}
		});
	}

	function assignAttr(html_element, attr_name)
	{
		let element = $(html_element);
		let has_attribute = element.attr(attr_name) !== undefined;
		if(has_attribute)
		{
			return element.attr(attr_name);
		}

		return false;
	}
});