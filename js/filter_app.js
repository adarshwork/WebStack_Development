angular.module("MyApp",[])
.controller("MyCtrl",function($scope)
{
    var jobs=[
        {title:'Pizza Executive - Tasty Pizzas', logo:'images/pizza.png', type:'PART-TIME', location:'Bangalore', salaryll:3000, salaryul:6000, description:'The Pizza Executive would be making pizza, delivering pizza (when required), handling the guests and taking the orders of our guests.'},
        {title:'Tutor - ALS Coaching Classes', logo:'images/tutor.png', type:'PART-TIME', location:'Bangalore', salaryll:10000, salaryul:15000, description:'The Tutor would be teaching various batches of students, creating question banks and keeping record of students.'},
        {title:'Data Entry Executive - Typing Solutions ', logo:'images/dataentry.png', type:'PART-TIME', location:'Bangalore', salaryll:5000, salaryul:10000, description:'The Data Entry Executive would do the data entry, collect the data from different sources, regularly update the data-sheets and inform about the work updates daily.'},
        {title:'Restaurant Team Member - Brew & Brooks', logo:'images/restaurant.png', type:'PART-TIME', location:'Bangalore', salaryll:3000, salaryul:6000, description:'The Restaurant Team Member would serve our guests, deliver the food (when required), handle the guests and take the orders of our guests.'},
        {title:'Cab Driver - Our Cabs', logo:'images/cab.png', type:'PART-TIME', location:'Bangalore', salaryll:5000, salaryul:10000, description:'The Cab Driver would drive the cab, handle the passengers professionally, keep record of number of daily rides, give updates about daily revenue.'}
    ];
    console.log(jobs);
    $scope.jobs=jobs;
    $scope.rowlimit=5;
});