
function downclick(string){
    if(string==='button3'){
        window.open('', '_blank').focus();
        document.getElementById("total-dndls-count").src="https://hits.seeyoufarm.com/api/count/incr/badge.svg?url=https%3A%2F%2Fblasteoroid-corporation-kbps10240.github.io%2FPass-Vault%2Ftotal-downloads-record&count_bg=%2379C83D&title_bg=%23555555&icon=verizon.svg&icon_color=%23E7E7E7&title=Total+Downloads%3A&edge_flat=false";
    }else if(string==='button2'){
        window.open('', '_blank').focus();
        document.getElementById("total-dndls-count").src="https://hits.seeyoufarm.com/api/count/incr/badge.svg?url=https%3A%2F%2Fblasteoroid-corporation-kbps10240.github.io%2FPass-Vault%2Ftotal-downloads-record&count_bg=%2379C83D&title_bg=%23555555&icon=verizon.svg&icon_color=%23E7E7E7&title=Total+Downloads%3A&edge_flat=false";
    }
}

function reload_download_counter(){
    document.getElementById("total-dndls-count").src="https://hits.seeyoufarm.com/api/count/incr/badge.svg?url=https%3A%2F%2Fblasteoroid-corporation-kbps10240.github.io%2FPass-Vault%2Ftotal-downloads-record&count_bg=%2379C83D&title_bg=%23555555&icon=verizon.svg&icon_color=%23E7E7E7&title=Total+Downloads%3A&edge_flat=false";
}