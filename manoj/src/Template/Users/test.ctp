p>Send me spam: <input type="checkbox" data-bind="checked: wantsSpam" /></p>
<div data-bind="visible: wantsSpam">
    Preferred flavors of spam:
    <div><input type="checkbox" value="cherry" data-bind="checked: spamFlavors,click:clicked " /> Cherry</div>
    <div><input type="checkbox" value="almond" data-bind="checked: spamFlavors" /> Almond</div>
    <div><input type="checkbox" value="msg" data-bind="checked: spamFlavors" /> Monosodium Glutamate</div>
</div>
 

<script src="https://cdnjs.cloudflare.com/ajax/libs/knockout/3.3.0/knockout-min.js"></script>
<script type="text/javascript">
    var checkVm=function(){
        var me=this;
        me.wantsSpam=ko.observable(true);
        me.spamFlavors=ko.observableArray(['cherry','almond']);
        me.clicked=function(){
            var v=e.currentTarget.val();
            alert(v);
        }
    }
    var obj=new checkVm();
    ko.applyBindings(obj);
</script>