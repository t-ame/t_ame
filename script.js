
var name = "Toya Amechi";

var courses = ["HTML/CSS/JavaScript", "GO", "PHP", "NodeJS", "UI/UX Design", "Flutter"];

console.log(name);
console.log(courses);


if((courses.length % 2) == 0){
	for(var i = 1; i <= 200; ++i){
		if((i % 2) == 0){
			console.log(i);
		}
	}
} else {
	for(var i = 1; i <= 200; ++i){
		if((i % 2) != 0){
			console.log(i);
		}
	}
}
