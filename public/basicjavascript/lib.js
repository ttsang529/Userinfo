//Design object
function createPlayerObject(name,hp){
    //var player= new Object();
    this.name  = name;
    this.hp    = hp;
    this.fight = function(player){
        //console.log(player);
        this.hp=this.hp-2;
        player.hp=player.hp-2;
    };
    this.rest  = function(){
        this.hp++;
    }
    this.report = function(){
        alert(this.name+": "+this.hp);
    }
    //return this;
}
getSuperfight=function(player){
            this.hp=this.hp-10;
            player.hp=player.hp-10;
        }