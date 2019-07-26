function updb2(done) {
    // setTimeout(function() {
    //     done();
    // }, 3000)


    setTimeout(() => { //Arrow Functions
        done();
    }, 3000);
}

updb2(function() {
    console.log('updb2 success.');
});
console.log('I like Nodejs.');