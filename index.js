const planets = document.querySelectorAll(".planet");
const planet_radian = [100, 150, 200, 100, 150, 200];
let planet_radians = new Array(6).fill(0);
const planet_velocities = [0.5, 0.66, 0.33, 0.5, 0.66, 0.33];

const planet_orbits = document.querySelectorAll(".planet-orbit");

planet_orbits.forEach((planet_orbit, index) => {
  planet_orbit.style.height = `${planet_radian[index]}%`;
  planet_orbit.style.width = `${planet_radian[index]}%`;
});

setInterval(() => {
  planets.forEach((planet, index) => {
    planet.style.left = `${
      Math.cos(planet_radians[index]) * (planet_radian[index] / 2)
    }%`;
    planet.style.top = `${
      Math.sin(planet_radians[index]) * (planet_radian[index] / 2)
    }%`;
    planet_radians[index] += planet_velocities[index] * 0.01;
  });
}, 0);
