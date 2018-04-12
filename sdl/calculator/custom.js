function shapeType (shape) {
    document.getElementById('results').innerHTML = '';
    if (shape === 'circle') {
        document.getElementById('circleCalculator').style.display = 'block';
        document.getElementById('squareCalculator').style.display = 'none';
        document.getElementById('rectangleCalculator').style.display = 'none';
    } else if (shape === 'square') {
        document.getElementById('circleCalculator').style.display = 'none';
        document.getElementById('squareCalculator').style.display = 'block';
        document.getElementById('rectangleCalculator').style.display = 'none';
    } else if (shape === 'rectangle') {
       document.getElementById('circleCalculator').style.display = 'none';
        document.getElementById('squareCalculator').style.display = 'none';
        document.getElementById('rectangleCalculator').style.display = 'block';
    } else if (shape === '') {
        document.getElementById('circleCalculator').style.display = 'none';
        document.getElementById('squareCalculator').style.display = 'none';
        document.getElementById('rectangleCalculator').style.display = 'none';
    }
}

console.log('a');