// script.js

// Fetch the data
fetch('data.json')
  .then((response) => response.json())
  .then((response) => {
    drawMap(response.clientRoute);
    fillInfo(response);
  })
  .catch((error) => {
    console.error('Error fetching data:', error);
  });

// const fillInfo = (response) => {
//   console.log(response.server.distance);
//   const speedContainer = document.querySelector('.info__speed');
//   speedContainer.textContent = response.server.speed;

//   const distanceContainer = document.querySelector('.info__distance');
//   distanceContainer.textContent = response.server.distance;

//   const lastUpdatedContainer = document.querySelector('.info__last-updated');
//   lastUpdatedContainer.textContent = response.server.lastUpdated;
// };

function drawMap(coords) {
  const mapContainer = document.querySelector('.map');
  const containerWidth = mapContainer.clientWidth;
  const containerHeight = mapContainer.clientHeight;

  // Extract lats and lons
  const lats = coords.map((point) => parseFloat(point.lat));
  const lons = coords.map((point) => parseFloat(point.lon));

  const minLat = Math.min(...lats);
  const maxLat = Math.max(...lats);
  const minLon = Math.min(...lons);
  const maxLon = Math.max(...lons);

  function toRadians(degrees) {
    return (degrees * Math.PI) / 180;
  }

  const meanLatRad = toRadians((minLat + maxLat) / 2);

  function mapCoordinates(latDeg, lonDeg) {
    const latRad = toRadians(latDeg);
    const lonRad = toRadians(lonDeg);

    const minLatRad = toRadians(minLat);
    const maxLatRad = toRadians(maxLat);
    const minLonRad = toRadians(minLon);
    const maxLonRad = toRadians(maxLon);

    const x = (lonRad - minLonRad) * Math.cos(meanLatRad);
    const y = latRad - minLatRad;

    const xRange = (maxLonRad - minLonRad) * Math.cos(meanLatRad);
    const yRange = maxLatRad - minLatRad;

    const xNorm = (x / xRange) * containerWidth;
    const yNorm = containerHeight - (y / yRange) * containerHeight;

    return { x: xNorm, y: yNorm };
  }

  // Create an SVG element for lines
  const svgNS = 'http://www.w3.org/2000/svg';
  const svg = document.createElementNS(svgNS, 'svg');
  svg.setAttribute('width', containerWidth);
  svg.setAttribute('height', containerHeight);
  svg.style.position = 'absolute';
  svg.style.left = '0';
  svg.style.top = '0';

  mapContainer.appendChild(svg);

  // Array to hold point positions
  const points = [];
  console.log(coords);

  coords.forEach((coord, index) => {
    const lat = parseFloat(coord.lat);
    const lon = parseFloat(coord.lon);
    const position = mapCoordinates(lat, lon);

    // Create a point element
    const pointElement = document.createElement('div');
    pointElement.classList.add('point');

    // Add 'point--first' or 'point--last' class if applicable

    // Set position
    pointElement.style.left = `${position.x}px`;
    pointElement.style.top = `${position.y}px`;

    // Create a text box with coordinates
    const coordText = document.createElement('div');
    coordText.classList.add('coord-text');
    coordText.textContent = `(${lat}, ${lon})`;

    if (index === 0) {
      const firstText = document.createElement('div');
      firstText.classList.add('coord-text--first');
      firstText.textContent = `client`;
      pointElement.classList.add('point--first');
      pointElement.appendChild(firstText);
    }
    if (index === coords.length - 1) {
      const lastText = document.createElement('div');
      lastText.classList.add('coord-text--last');
      lastText.textContent = `server`;
      pointElement.classList.add('point--last');
      pointElement.appendChild(lastText);
    }

    // Append the text box to the point element
    pointElement.appendChild(coordText);

    // Append the point element to the map container
    mapContainer.appendChild(pointElement);

    // Store the position
    points.push(position);
  });

  // Draw lines between points with dashed style
  for (let i = 0; i < points.length - 1; i++) {
    const startPoint = points[i];
    const endPoint = points[i + 1];

    // Create a line element
    const line = document.createElementNS(svgNS, 'line');
    line.setAttribute('x1', startPoint.x);
    line.setAttribute('y1', startPoint.y);
    line.setAttribute('x2', endPoint.x);
    line.setAttribute('y2', endPoint.y);
    line.classList.add('line');

    // Make the line dashed
    // line.setAttribute('stroke-dasharray', '15,5');

    // Append the line to the SVG
    svg.appendChild(line);
  }
}
