function changeImage() {
		alert(document.getElementById("imgClickAndChange").src);
        if (document.getElementById("imgClickAndChange").src == "calderon.png") 
        {
            document.getElementById("imgClickAndChange").src = "marik.png";
        }
        else 
        {
        	document.getElementById("imgClickAndChange").src = "calderon.png";
        }
}