const n=document.getElementById("liveAlertPlaceholder"),i=document.getElementById("liveAlertBtn"),r=(e,t)=>{const l=document.createElement("div");l.innerHTML=[`<div class="alert mb-2 alert-${t} alert-dismissible" role="alert">`,`   <div>${e}</div>`,'   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i class="bi bi-x"></i></button>',"</div>"].join(""),n.append(l)};i&&i.addEventListener("click",()=>{r("Nice, you triggered this alert message!","success")}),document.querySelectorAll('.bd-example-indeterminate [type="checkbox"]').forEach(e=>{e.indeterminate=!0}),document.querySelectorAll('.bd-content [href="#"]').forEach(e=>{e.addEventListener("click",t=>{t.preventDefault()})});
