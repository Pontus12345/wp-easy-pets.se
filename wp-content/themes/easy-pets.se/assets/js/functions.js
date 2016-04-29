/**
* Home page
*/

document.addEventListener('DOMContentLoaded',function(){
	stylePut(
		'15px',
		document.getElementById("content"),
		document.querySelectorAll(".btn-All")
		);
});

function stylePut(v2_mData, v1_mGet, v2_mGet) 
{
	if(v1_mGet) {
		for (var i = 0; i < v2_mGet.length; i++) {
			v2_mGet[i].style.padding = v2_mData;
		} 
	} 

}
function linkSrc(id, link) {
	// It ca't find js funtion whe doing click event
	if (id) {
		location.href = link;
	}
};


