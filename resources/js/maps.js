
const Lang = document.getElementById('Lang')
const Lat = document.getElementById('Lat')
const form = document.getElementById('form')
const errorElement = document.getElementById('error')

  form.addEventListener('searchMap',(e)=>{
    let messages=[]
    if (Lang.value===''|| Lang.value == null){
      messages.push('coordinate is required')
    }

    if (Lat.value===''|| Lat.value == null){
      messages.push('coordinate is required')
    }

    if(messages.value.Tikor_ODP >  0){
      e.preventDefault()
      errorElement.innerText = messages.join(',')
    }

    
   map.panTo(L.latLng(Lang,Lat));
  });
    





