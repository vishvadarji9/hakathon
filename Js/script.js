document.getElementById('user-profile-form').addEventListener('submit', function(event) {
    event.preventDefault();

    const age = document.getElementById('age').value;
    const gender = document.getElementById('gender').value;
    const weight = document.getElementById('weight').value;
    const height = document.getElementById('height').value;
    const dietaryPreferences = document.getElementById('dietary-preferences').value;
    const allergies = document.getElementById('allergies').value;
    const healthGoals = document.getElementById('health-goals').value;

    const userProfile = {
        age,
        gender,
        weight,
        height,
        dietaryPreferences,
        allergies,
        healthGoals
    };

    // Here you can send the userProfile data to your server or store it in localStorage
    console.log('User Profile:', userProfile);
    alert('Profile updated successfully!');
});
