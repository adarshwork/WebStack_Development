angular.module('myapp',[])
.controller('myctrl',function($scope)
{
    $scope.contributors=[
        {id:'C01',name:'Adarsh', info:"Creator"},
        {id:'C02',name:'Google', info:" Source for Everything"},
        {id:'C03',name:'W3Schools',info:"Largest Web Development Website"},
        {id:'C04',name:'StackOverflow', info:"Problem Solver"}
    ];
    $scope.save=function()
    {
        var index=getindex($scope.id);
        $scope.contributors[index].name=$scope.name;
        $scope.contributors[index].info=$scope.info;
    }
    $scope.add=function()
    {
        $scope.contributors.push({
            id:$scope.id,name:$scope.name,info:$scope.info
        });
    }
    function getindex(id)
    {
        for(var i=0;i<$scope.contributors.length;i++)
        if($scope.contributors[i].id==id)
        return i;
        return -1;
    }
    $scope.edit=function(id)
    {
        var index=this.$index;
        var contributor=$scope.contributors[index];
        $scope.id=contributor.id;
        $scope.name=contributor.name;
        $scope.info=contributor.info;
    }
    $scope.delete=function()
    {
        var result=confirm('Are you sure?');
        if(result==true)
        {
            var index=this.$index;
            $scope.contributors.splice(index,1);
        }
    };
});