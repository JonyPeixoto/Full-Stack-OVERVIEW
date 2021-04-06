const gulp = require('gulp');
const imagemin = require('gulp-imagemin');

gulp.task('message',function(){
	return console.log("The CybertimeUP is the best!");
});

/* USE THE COMMAND ON THE PROMPT ABOVE FOR COPY SRC: INDEX.PHP FOR THE FILE: DESTINY >> INDEX.PHP */

gulp.task('copyPHP',function(){
	gulp.src('src/*.php').pipe(gulp.dest('destiny'));
});

/* USE THE COMMAND ON THE PROMPT ABOVE: ONLY USE...  GULP */

gulp.task('default',()=>{
	return console.log('Hey!');
})

gulp.task('decreaseImage',()=>{
	gulp.src('src/*').pipe(imagemin()).pipe(gulp.dest('dist'));
});