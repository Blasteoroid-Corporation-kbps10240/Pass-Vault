function downclick(string){
    timestamp = new Date().getTime(); 
    if(string==='button3'){
        /*reload_download_counter(timestamp);*/
        document.getElementById("total-dndls-count").src="https://hits.seeyoufarm.com/api/count/incr/badge.svg?url=https%3A%2F%2Fblasteoroid-corporation-kbps10240.github.io%2FPass-Vault%2Ftotal-downloads-record&count_bg=%2379C83D&title_bg=%23555555&icon=verizon.svg&icon_color=%23E7E7E7&title=Total+Downloads%3A&edge_flat=false" + timestamp;
        window.open('' , '_blank').focus();
    
    }else if(string==='button2'){
        /*reload_download_counter(timestamp);*/
        document.getElementById("total-dndls-count").src="https://hits.seeyoufarm.com/api/count/incr/badge.svg?url=https%3A%2F%2Fblasteoroid-corporation-kbps10240.github.io%2FPass-Vault%2Ftotal-downloads-record&count_bg=%2379C83D&title_bg=%23555555&icon=verizon.svg&icon_color=%23E7E7E7&title=Total+Downloads%3A&edge_flat=false"+timestamp;
        window.open('' , '_blank').focus();
        
    }
}
