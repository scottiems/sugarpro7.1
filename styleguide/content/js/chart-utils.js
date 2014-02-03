// Chart type icons
function select2ChartIcon(type) {
  switch(type) {
    case 'Donut':
      return '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xl="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 40 40"><g stroke="none" stroke-opacity="1" stroke-dasharray="none" fill="none" fill-opacity="1"><g><path d="M 36 20.007558 C 36 28.835144 28.857008 36 20.022652 36 C 11.203398 36 4.0453044 28.835144 4.0453044 20.007558 C 4.0453044 11.164856 11.203398 4 20.022652 4 C 28.857008 4 36 11.164856 36 20.007558 Z" fill="#dfdfdf"/><path d="M 36 20.007558 C 36 28.835144 28.857008 36 20.022652 36 C 11.203398 36 4.0453044 28.835144 4.0453044 20.007558 C 4.0453044 11.164856 11.203398 4 20.022652 4 C 28.857008 4 36 11.164856 36 20.007558 Z" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/><path d="M 19.977348 20.068021 L 19.977348 4.060463 C 11.142992 4.060463 4 11.225319 4 20.068021 C 4 20.99008 4.0755073 21.927256 4.2416234 22.8342 Z" fill="#a6a6a6"/><path d="M 19.977348 20.068021 L 19.977348 4.060463 C 11.142992 4.060463 4 11.225319 4 20.068021 C 4 20.99008 4.0755073 21.927256 4.2416234 22.8342 Z" fill="#b3b3b3"/><path d="M 19.977348 20.068021 L 19.977348 4.060463 C 11.142992 4.060463 4 11.225319 4 20.068021 C 4 20.99008 4.0755073 21.927256 4.2416234 22.8342 Z" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/><path d="M 19.977348 20.068021 L 32.043417 9.5625886 C 28.932515 5.9952763 24.417178 3.9848843 19.69042 4.0755786 Z" fill="#838383"/><path d="M 19.977348 20.068021 L 32.043417 9.5625886 C 28.932515 5.9952763 24.417178 3.9848843 19.69042 4.0755786 Z" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/><path d="M 20.249174 14.943788 C 17.394998 14.943788 15.084474 17.256495 15.084474 20.128484 C 15.084474 22.985357 17.394998 25.298063 20.249174 25.298063 C 23.118452 25.298063 25.428976 22.985357 25.428976 20.128484 C 25.428976 17.256495 23.118452 14.943788 20.249174 14.943788 Z" fill="white"/><path d="M 20.249174 14.943788 C 17.394998 14.943788 15.084474 17.256495 15.084474 20.128484 C 15.084474 22.985357 17.394998 25.298063 20.249174 25.298063 C 23.118452 25.298063 25.428976 22.985357 25.428976 20.128484 C 25.428976 17.256495 23.118452 14.943788 20.249174 14.943788 Z" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/></g></g></svg>';
      break;
    case 'Funnel':
      return '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xl="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 40 40"><g stroke="none" stroke-opacity="1" stroke-dasharray="none" fill="none" fill-opacity="1"><g><path d="M 4 3.83 L 36 3.83 L 32 12 L 8 12 Z" fill="#dfdfdf"/><path d="M 8 12 L 32 12 L 27 22 L 13 22 Z" fill="#b3b3b3"/><path d="M 13 22 L 20 36 L 27 22 Z" fill="#838383"/></g></g></svg>';
      break;
    case 'Horizontal':
      return '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xl="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 40 40"><g stroke="none" stroke-opacity="1" stroke-dasharray="none" fill="none" fill-opacity="1"><g><path d="M 28 4 L 28 12 L 4 12 L 4 4 L 28 4 Z" fill="#dfdfdf"/><path d="M 36 16 L 36 24 L 4 24 L 4 16 L 36 16 Z" fill="#b3b3b3"/><path d="M 20 28 L 20 36 L 4.0000009 36 L 4.0000009 28 L 20 28 Z" fill="#838383"/></g></g></svg>';
      break;
    case 'Line':
      return '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xl="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 40 40"><g stroke="none" stroke-opacity="1" stroke-dasharray="none" fill="none" fill-opacity="1"><path d="M 0 30.174306 L 18.83054 10.9825694 L 26.160149 23.790833 L 40 11.7056165 L 40 11.7056165" stroke="#636363" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/></g></g></svg>';
      break;
    case 'Pareto':
      return '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xl="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 40 40"><g stroke="none" stroke-opacity="1" stroke-dasharray="none" fill="none" fill-opacity="1"><g><path d="M 4 12 L 12 12 L 12 36 L 4 36 L 4 12 Z" fill="#dfdfdf"/><path d="M 16 4 L 24 4 L 24 36 L 16 36 L 16 4 Z" fill="#b3b3b3"/><path d="M 28 20 L 36 20 L 36 36 L 28 36 L 28 20 Z" fill="#838383"/><path d="M 62074205e-22 30.174306 L 18.83054 10.9825694 L 26.160149 23.790833 L 40 11.7056165 L 40 11.7056165" stroke="#636363" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/></g></g></svg>';
      break;
    case 'Pie':
      return '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xl="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 40 40"><g stroke="none" stroke-opacity="1" stroke-dasharray="none" fill="none" fill-opacity="1"><g><path d="M 36 20.007558 C 36 28.835144 28.857008 36 20.022652 36 C 11.203398 36 4.0453044 28.835144 4.0453044 20.007558 C 4.0453044 11.164856 11.203398 4 20.022652 4 C 28.857008 4 36 11.164856 36 20.007558 Z" fill="#c1c1c1"/><path d="M 36 20.007558 C 36 28.835144 28.857008 36 20.022652 36 C 11.203398 36 4.0453044 28.835144 4.0453044 20.007558 C 4.0453044 11.164856 11.203398 4 20.022652 4 C 28.857008 4 36 11.164856 36 20.007558 Z" fill="#dfdfdf"/><path d="M 36 20.007558 C 36 28.835144 28.857008 36 20.022652 36 C 11.203398 36 4.0453044 28.835144 4.0453044 20.007558 C 4.0453044 11.164856 11.203398 4 20.022652 4 C 28.857008 4 36 11.164856 36 20.007558 Z" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/><path d="M 19.977348 20.068021 L 19.977348 4.060463 C 11.142992 4.060463 4 11.225319 4 20.068021 C 4 20.99008 4.0755073 21.927256 4.2416234 22.8342 Z" fill="#a6a6a6"/><path d="M 19.977348 20.068021 L 19.977348 4.060463 C 11.142992 4.060463 4 11.225319 4 20.068021 C 4 20.99008 4.0755073 21.927256 4.2416234 22.8342 Z" fill="#b3b3b3"/><path d="M 19.977348 20.068021 L 19.977348 4.060463 C 11.142992 4.060463 4 11.225319 4 20.068021 C 4 20.99008 4.0755073 21.927256 4.2416234 22.8342 Z" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/><path d="M 19.977348 20.068021 L 32.043417 9.5625886 C 28.932515 5.9952763 24.417178 3.9848843 19.69042 4.0755786 Z" fill="#838383"/><path d="M 19.977348 20.068021 L 32.043417 9.5625886 C 28.932515 5.9952763 24.417178 3.9848843 19.69042 4.0755786 Z" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/></g></g></svg>';
      break;
    case 'Stack':
      return '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xl="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 40 40"><g stroke="none" stroke-opacity="1" stroke-dasharray="none" fill="none" fill-opacity="1"><g><path d="M 15.5 4 L 24.5 4 L 24.5 8 L 15.5 8 L 15.5 4 Z" fill="#dfdfdf"/><path d="M 15.5 10 L 24.5 10 L 24.5 24 L 15.5 24 L 15.5 10 Z" fill="#b3b3b3"/><path d="M 15.5 26 L 24.5 26 L 24.5 36 L 15.5 36 L 15.5 26 Z" fill="#838383"/><path d="M 27 12 L 36 12 L 36 16 L 27 16 L 27 12 Z" fill="#dfdfdf"/><path d="M 27 18 L 36 18 L 36 26 L 27 26 L 27 18 Z" fill="#b3b3b3"/><path d="M 27 28 L 36 28 L 36 36 L 27 36 L 27 28 Z" fill="#838383"/><path d="M 4 18 L 13 18 L 13 20 L 4 20 L 4 18 Z" fill="#dfdfdf"/><path d="M 4 22 L 13 22 L 13 30 L 4 30 L 4 22 Z" fill="#b3b3b3"/><path d="M 4 32 L 13 32 L 13 36 L 4 36 L 4 32 Z" fill="#838383"/></g></g></svg>';
      break;
    case 'Vertical':
      return '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xl="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 40 40"><g stroke="none" stroke-opacity="1" stroke-dasharray="none" fill="none" fill-opacity="1"><g><path d="M 4 12 L 12 12 L 12 36 L 4 36 L 4 12 Z" fill="#dfdfdf"/><path d="M 16 4 L 24 4 L 24 36 L 16 36 L 16 4 Z" fill="#b3b3b3"/><path d="M 28 20 L 36 20 L 36 36 L 28 36 L 28 20 Z" fill="#838383"/></g></g></svg>';
      break;
  }
}

function select2ChartSelection(chart) {
  if (!chart.id) return chart.text; // optgroup
  return select2ChartIcon(chart.id);
}

function select2ChartResult(chart) {
  if (!chart.id) return chart.text; // optgroup
  return select2ChartIcon(chart.id) + chart.text;
}