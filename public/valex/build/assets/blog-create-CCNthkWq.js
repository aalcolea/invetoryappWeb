(function(){var t=[[{header:[1,2,3,4,5,6,!1]}],[{font:[]}],["bold","italic","underline","strike"],["blockquote","code-block"],[{header:1},{header:2}],[{list:"ordered"},{list:"bullet"}],[{color:[]},{background:[]}],[{align:[]}],["image","video"],["clean"]];new Quill("#blog-content",{modules:{toolbar:t},theme:"snow"});const o=document.querySelector(".blog-images");FilePond.create(o),flatpickr("#publish-date",{}),flatpickr("#publish-time",{enableTime:!0,noCalendar:!0,dateFormat:"H:i"}),new Choices("#blog-tags",{allowHTML:!0,removeItemButton:!0}),document.addEventListener("DOMContentLoaded",function(){var l=document.querySelectorAll("[data-trigger]");for(let e=0;e<l.length;++e){var r=l[e];new Choices(r,{allowHTML:!0,placeholderValue:"This is a placeholder set in the config",searchPlaceholderValue:"Search Crypto Currency"})}})})();
