MUSIC DISCOVERY OASIS-MVP Specification
Unearthing hidden musical gems tailored to your taste.


 Team:

 Names of Team Members:
1. Alex Wadenya

 Roles:
1. Alex Wadenya
   Role:  Frontend Development and Visualization
     - Responsibilities: Designing the user interface, implementing interactive features, integrating with the D3.js library for musical pattern visualization, and ensuring responsive design across devices.
   Why: Alex has a keen eye for design and a strong grasp of frontend technologies, especially when it comes to crafting intuitive user interfaces and data visualization.

   Role: Backend Development and Data Integration
     - Responsibilities: Setting up the server, database, integrating with the Spotify API, designing the recommendation algorithm, and ensuring data privacy and security.
   Why: Stephen possesses a solid background in backend technologies and data management, making him the ideal candidate to handle data-centric tasks, API integrations, and algorithm design.

The roles have been decided based on the strengths and expertise of each team member. By leveraging individual strengths, the team aims for a harmonious and efficient development process, ensuring that every aspect of the Music Discovery Oasis project is well-executed and refined.


Technologies:
1. Languages
 Python: For backend development, especially given its extensive libraries for recommendation systems and data processing.
   JavaScript: For frontend development, interactive features, and asynchronous functions.

2. Frontend Framework:
 React: A JavaScript library for building user interfaces. Provides component-based architecture which is great for single-page applications.

3. Backend Framework:
  Django: A Python web framework that follows the "batteries-included" philosophy and is great for building robust applications.

4. Database:
  PostgreSQL: Robust, open-source SQL database known for its reliability and scalability.

5. Recommendation Engine Library:
   Surprise: A Python scikit for building and analyzing recommendation systems.

6. Music Data API:
 Spotify API: Provides a lot of data about songs, artists, and user preferences.

7. Visualization:
   D3.js: A JavaScript library for producing dynamic, interactive data visualizations in web browsers.

8. Version Control:
 Git & GitHub: For source code management, collaboration, and versioning.

9. Deployment:
 Docker: For containerization.
 Heroku: Cloud platform as a service supporting several programming languages.

10. Resources:
  Books: "Recommender Systems Handbook" by Francesco Ricci, Lior Rokach, and Bracha Shapira.
Online: Courses on Udemy or Coursera on recommendation systems and React application development.

 Technology Choices Explained:

1. Choice: Django vs. Alternate: Flask
 Django:
Pros: Comes with an ORM, admin interface, and many built-in features. Provides more structure and has the "batteries-included" philosophy.
 Cons: Might be overkill for very simple applications and has a steeper learning curve.
Flask:
Pros: Lightweight, more flexible, and easier to start with for simple apps.
Cons: Might need to integrate multiple third-party libraries for features that are built-in with Django.
 Decision: Django was chosen because of its built-in features which can accelerate development. Given the need for a robust database model and admin interface to manage music data, Django's "batteries-included" philosophy would be more beneficial.

2. Choice: D3.js vs. Alternate: Chart.js
 D3.js:
Pros: Highly customizable, can create complex visualizations, and has a large community.
Cons: Steeper learning curve and can be complex for simple visualizations.
 Chart.js:
  Pros: Simple to use, great for standard charts, and has a cleaner API.
 Cons: Less customizable compared to D3.js.
 Decision: D3.js was chosen because of its ability to produce more dynamic and intricate visualizations. Given the need to visualize music patterns in a unique and interactive way, the customizability of D3.js would offer more options and potential for innovation.

Challenge:
Problem Statement:
Music enthusiasts often find themselves limited to popular tracks and artists that dominate mainstream platforms. The vast universe of music contains numerous hidden gems that go unnoticed due to the lack of exposure. The Music Discovery App aims to bridge this gap by offering recommendations for lesser-known tracks and artists based on users' current favorites. By introducing listeners to new genres, artists, and tracks that resonate with their tastes but are outside their usual listening circle, we can enhance their musical journey.

Limitations of the Project:
1. The Music Discovery App will prioritize introducing lesser-known tracks and artists; therefore, it might not be the go-to platform for trending or top-chart music.
2. The recommendations will be based on user preferences and inputted favorites. The system may not account for the broadness of a user's music taste until enough data is gathered.
3. The platform is not intended to replace comprehensive music platforms like Spotify or Apple Music but to supplement them by focusing on discovery.

Target Audience:
1.Music Enthusiasts: Those who are always on the hunt for new music and want to explore beyond the mainstream.
2.Independent Artists: Emerging artists looking for a platform that can help them gain visibility among audiences that would appreciate their style.
3.Casual Listeners: Users who may not actively search for new music but are open to expanding their playlists.
Locale Relevance:
While music is a universal language and the app is designed to cater to a global audience, certain features might have locale-specific relevance. For instance:
1. Recommendations can be tailored based on regional music trends and indie artists from specific locations.
2. Music genres dominant in certain regions (e.g., K-pop in South Korea, Afrobeat in West Africa, Country in the USA) can be given emphasis for users from those locales.
3. However, the app's primary goal remains to bridge musical boundaries, so while locale-specific customization might enhance the user experience, the app is not strictly dependent on a specific locale.

Risks:
Technical Risks:

1. Algorithm Inaccuracy:
Potential Impact: If the recommendation algorithm is not accurate, users might get suggestions that don't align with their tastes, leading to dissatisfaction and potential churn.
Safeguard/Alternative: Implement a hybrid recommendation system combining collaborative and content-based filtering. Regularly test and iterate the algorithm, incorporating user feedback.

2. Data Privacy Concerns:
 Potential Impact: Mishandling user data can lead to privacy breaches and loss of trust.
Safeguard/Alternative: Implement strong encryption methods, conduct regular security audits, and ensure GDPR and other data protection regulations compliance.

3.Scalability Issues:
 Potential Impact: If the app gains rapid popularity, the current infrastructure might not support the increased load, causing downtime or slow responses.
Safeguard/Alternative: Use scalable cloud solutions, monitor server loads, and have auto-scaling provisions in place.

4.Integration with External Music APIs:
Potential Impact: Dependence on third-party APIs like Spotify might lead to data fetch issues if there are any changes or disruptions in their service.
Safeguard/Alternative: Build redundancies by integrating multiple music data providers. Regularly update API integrations and have a notification system for any integration failures.

 Non-Technical Risks:
1. User Adoption:
 Potential Impact: Despite its features, the app might face challenges in getting users on board or might experience high churn rates.
Strategy: Conduct regular user feedback sessions, market research, and A/B testing to understand and improve user experience. Develop a referral program to incentivize user growth.

2. Monetization and Sustenance:
Potential Impact: Without a clear monetization strategy, the platform might not be sustainable in the long run.
Strategy: Explore multiple revenue streams such as premium subscriptions, affiliate marketing with music platforms, or advertising. Ensure these methods don't hamper the user experience.

3. Legal Challenges with Music Licensing:
Potential Impact: Playing or redirecting to copyrighted tracks without proper licensing can lead to legal issues.
Strategy: Rather than hosting tracks, the platform can redirect users to licensed platforms or work on partnerships with them. Always stay updated with music licensing laws.

4. Misalignment with Market Needs:
Potential Impact: The platform might not align with the actual needs or preferences of the target audience.
Strategy: Adopt a lean methodology, releasing MVPs (Minimum Viable Products) to gather user feedback and iterate accordingly. Keep an open channel for user feedback and ensure the product development cycle is adaptable.

By acknowledging these risks early on, strategies can be put in place to mitigate them and ensure the project's successful development and deployment.
Infrastructure:
Branching and Merging Strategy:
GitHub Flow:
-Main Branch: Always deployable. It's the standard branch where the source code of HEAD always reflects a production-ready state.
-Feature Branches: Created from the main branch. For every new feature or bugfix, a new branch is created. Naming convention follows the pattern `feature/feature-name` or `bugfix/bugfix-name`.
Pull Requests (PR): Once the feature or bugfix is complete, a PR is opened against the main branch. This PR triggers automated tests and, upon passing them, is reviewed by at least one other developer before merging.
Continuous Integration (CI): Integrate with a CI tool to run tests automatically on every PR.
Release: Once merged, changes are deployed to a staging environment for final testing. After ensuring everything works as expected, it's deployed to production.

 Deployment Strategy:
Continuous Deployment using Heroku:
Heroku Pipelines: For staging and production deployment.
Docker: Containerize the application to ensure consistent environments across development, staging, and production.
Automatic Deploys: Once changes are merged into the main branch and pass tests in the staging environment, they're automatically deployed to production.

 Data Population:
Spotify API Integration:
- Use the Spotify API to fetch details about songs, artists, and genres.
- Schedule periodic tasks (using tools like Celery for Python) to update the database with new tracks and artists.
- Allow users to manually search and add tracks/artists not yet in the database.

Web Scrapers:
- Use web scraping tools (like Beautiful Soup or Scrapy in Python) to gather additional data or metadata about songs and artists from various web sources, enriching the content of the app.

 Testing:

Tools & Processes
-Unit Tests: Use libraries like `unittest` (Python) or `Jest` (JavaScript) for writing unit tests to check individual units of code.
Integration Tests: Use tools like `Postman` or `Supertest` to ensure that different parts of the application work together as expected.
- End-to-End Tests: Use `Selenium` or `Cypress` to simulate real user behavior and test the entire flow of the application.
Continuous Integration: Integrate with a CI service like `Travis CI` or `GitHub Actions` to run tests automatically for every PR.
Coverage Tools: Use tools like `Coverage.py` or `Istanbul` to ensure that a significant portion of the codebase is tested.
Mocking: Use mocking libraries to mimic external services, ensuring tests don't rely on external factors.

By setting up a robust infrastructure, the team can ensure smooth development, deployment, and maintenance of the Music Discovery App, while also guaranteeing the quality and reliability of the application.
 Existing Solutions:

Given our project on the Music Discovery App, let's discuss existing solutions that have attempted to cater to this niche. 

1.Spotify's 'Discover Weekly’:
 Similarities: Uses algorithms and machine learning to introduce users to new tracks based on their listening habits. It's curated weekly and combines both user behavior and song attribute analysis.
Differences: Our app aims to focus primarily on lesser-known tracks and artists. While 'Discover Weekly' does introduce lesser-known tracks, it still often contains mainstream or previously played songs.

2. Pandora:
Similarities: Uses the Music Genome Project, an intricate algorithm that breaks songs down to their musical elements and introduces users to new songs based on their preferences.
 Differences: Pandora's focus is more on radio-style stations based on artists or songs, while our app aims for a more curated and personalized list of lesser-known song suggestions.

3. Last.fm:
Similarities: Last.fm recommends songs based on the listening habits of users and the habits of other users with similar tastes. 
Differences: While Last.fm primarily revolves around 'scrobbling' and tracking listening habits across platforms, our app's primary mission is to discover hidden gems in the music world.

4. Apple Music's 'For You':
Similarities: Apple Music uses human curators and algorithms to recommend new tracks to users based on their listening habits.
 Differences: 'For You' has a broader spectrum, including popular tracks and albums, while our focus is on less mainstream music.

 Choosing to Reimplement:
Given the scenario of developing an image compression algorithm and choosing Transform coding, we would discuss it as follows:
There are several classes of image compression:

1.Lossless Compression: Ensures there's no loss of image quality. Examples include Huffman coding and Run-Length Encoding.
2.Lossy Compression: Accepts some loss of data for higher compression rates. Examples include Quantization and Transform coding.
3.Predictive Coding: Predicts the next pixel's value based on previous pixels.

Within lossy compression, there are various algorithms:

1.Quantization: Divides the input image into blocks and reduces the number of colors.
2.Discrete Cosine Transform (DCT): Transforms the image from the spatial domain to the frequency domain.
3.Wavelet Transform: Like DCT but can represent data with irregular shapes better.

Unique Aspects of Transform Coding (e.g., DCT):
- It focuses on the conversion of spatial data into frequency data. Since human eyes are less sensitive to small color changes in high-frequency regions, it allows for high compression rates without perceived loss.
- It's widely used in JPEG compression.

Given these classes and types, if we chose to reimplement using Transform coding (like DCT), it'd be because of its effectiveness in maintaining a balance between compression rate and perceived image quality, making it suitable for many real-world applications.

For our Music Discovery App, while many solutions offer music recommendations, our unique selling proposition is the emphasis on lesser-known tracks and artists, filling a gap that's not the primary focus of most mainstream platforms.
Architecture




APIs and Methods
API Routes for Web Client Communication:
/api/music/search
GET: Returns an array of tracks and artists based on the search query.
POST: Allows a user to add a new track or artist to their favorites.

/api/user
GET: Returns the user's information, preferences, and saved tracks based on the session id.
POST: Registers a new user or updates the existing user's details.
/api/recommendations
GET: Returns a curated list of lesser-known tracks and artists based on user preferences and listening history.

/api/feedback
POST: Allows users to provide feedback on track recommendations.


API Endpoints or Methods for Other Clients:
1. class MusicData.Query(track_name, artist_name=None)

MusicData Object.
Function to query the database for specific tracks or artists and retrieve metadata.
Parameters:
track_name – The name of the track to search.
artist_name – (optional) The name of the artist, if specifically searching for tracks by an artist.

2. class UserPreferences.Update(userId, preference_data)
UserPreferences Object.
Function to update a user's music preferences in the database.
Parameters:
userId – The unique identifier of the user.
preference_data – Data related to user preferences, e.g., favorite genres, disliked artists, etc.
3rd Party APIs Used:
Spotify Web API (Documentation)
GET /v1/albums/{id}: Get an Album.
GET /v1/artists/{id}: Get an Artist.
GET /v1/me/top/artists: Get a User's Top Artists and Tracks.
GET /v1/search: Search for an Item.

Last.fm API (Documentation)
album.getinfo: Get information on an album.
artist.getsimilar: Get similar artists based on an artist name.
track.search: Search for a track by track name and artist.
By having a well-defined set of API routes, methods, and third-party integrations, "Music Discovery Oasis" can ensure efficient data retrieval, processing, and delivery to enhance user experience and platform functionality.



Data Model
User Stories
What are User Stories?
User stories are a simple, straightforward method to capture product functionality from the user's perspective. They are written in everyday language so that users, developers, and stakeholders can understand them. Typically, a user story consists of a short sentence or two, presented in the format:

"As a [type of user], I want [a specific feature] so that [I can achieve some goal or benefit]."

The idea is to shift the focus from writing about requirements to discussing them, ensuring that everyone understands the user's needs.

How to Write User Stories:
Identify the User: Start by specifying the type of user who wants the feature.
Define the Goal: Outline what the user wants to achieve.
Explain the Reason: Describe why the user needs this feature.
Acceptance Criteria: This is a set of conditions that the product must satisfy for the user story to be accepted as complete. They clarify the story, detailing the expected behavior.
Pitfalls of Creating User Stories:
Too General: If a user story is too broad, it won't provide a clear sense of what to develop, leading to potential misinterpretations.
Lacking Acceptance Criteria: Without clear acceptance criteria, it's challenging to determine when a user story has been satisfied.
Not Involving Users: User stories should represent the user's needs, so it's crucial to involve them in the creation process.
Too Technical: User stories should be understandable for all stakeholders, not just developers. Avoid technical jargon.
User Stories for "Music Discovery Oasis":
Discover New Tracks:
As a music enthusiast, I want to receive recommendations for lesser-known tracks based on my preferences so that I can discover new music tailored to my taste.
Acceptance Criteria:
User can input their current favorite tracks or artists.
The system provides a list of recommended tracks not in the user's current playlist.

Save Favorite Tracks:
As a user, I want to save tracks I like from the recommendations so that I can listen to them later.
Acceptance Criteria:
User can click a 'save' or 'like' button next to each recommended track.
The saved tracks are accessible in a separate 'Favorites' section.
Search for Specific Tracks:
As a user, I want to search for specific tracks or artists to see if they are in the app's database.
Acceptance Criteria:
User can input track or artist names in a search bar.
The system displays matching results.
Provide Feedback on Recommendations:
As a user, I want to give feedback on the recommendations I receive so that the system can improve its suggestions over time.
Acceptance Criteria:
Next to each recommended track, there's an option to provide feedback (like "liked", "disliked", "already know").
The system adjusts future recommendations based on feedback.
Visualize Music Patterns:
As a music lover, I want to see visual patterns of the recommended music, such as genres or moods, so I can get a graphical representation of my musical journey.
Acceptance Criteria:
User can access a 'Visualization' section.
The system displays graphs/charts representing music patterns based on user preferences and recommendations.
Mockups
