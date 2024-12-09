<x-layout>
 <!-- Navbar -->
 <nav class="bg-white shadow-md">
    <div class="max-w-7xl mx-auto px-4">
      <div class="flex items-center h-16">
        <!-- Logo and Profile -->
        <div class="flex items-center space-x-3">
            <!-- Logo -->
          <img src="https://via.placeholder.com/40" alt="Logo" class="h-10 w-10 rounded-full">

          <!-- Text Profile -->
          <span class="text-gray-800 font-medium text-lg">Profile</span>
        </div>
      </div>
    </div>
  </nav>

<div class="px-4 py-8 text-white bg-gray-700">
        <div class="flex items-center ml-40">
            <!-- Avatar -->
            <div class="flex items-center justify-center w-16 h-16 overflow-hidden bg-gray-500 rounded-full">
                <img src="https://via.placeholder.com/64" alt="Avatar" class="object-cover w-full h-full" />
            </div>

            <div class="ml-6">
                <!-- Heading -->
                <h2 class="text-xl font-semibold">Sarah</h2>
                <!-- Badge -->
                <div class="inline-block px-2 py-1 mt-1 text-sm bg-gray-600 rounded">
                    Farmer
                </div>
                <div class="inline-block px-2 py-1 mt-1 text-sm bg-gray-600 rounded">
                    Organic Produce
                </div>
                <!-- Description -->
                <p class="mt-1 text-sm text-gray-300">
                    Passionate about sustainable farming practies
                    </p>
            </div>
        <!-- Action Buttons -->
        <div class="flex flex-col justify-between space-y-4 ml-auto">
                <!-- Edit Profile Button -->
                <button class="px-4 py-2 text-sm font-semibold text-gray-700 bg-white rounded-full hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    Edit Profile
                </button>

                <!-- Logout Button -->
                <button class="px-4 py-2 text-sm font-semibold text-white bg-red-600 rounded-full hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500">
                    Logout
                </button>
            </div>
        </div>
    </div>

<div class="px-4 py-8 text-white bg-white">
    <div class="flex items-center justify-between ml-5">
        <!-- Profile Section -->
        <div class="flex flex-col items-center space-y-4">
            <!-- Heading (Text above Image) -->
            <h2 class="text-2xl font-bold text-black">Profil Petani</h2>
            
            <!-- Image -->
            <div class="flex-shrink-0">
                <img src="https://via.placeholder.com/150" alt="Profile Image" class="w-32 h-32 object-cover rounded-full shadow-md">
            </div>
        </div>


<!-- Edit Profile Section -->
<div class="w-1/2 px-6 py-6 bg-white shadow-md rounded-lg max-w-2xl mx-auto mt-10">
            

            <!-- Nama Lengkap -->
            <div class="mb-4">
                <label for="full-name" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                <input type="text" id="full-name" name="full-name" class="mt-1 p-2 w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" placeholder="Masukkan nama lengkap" required />
            </div>

            <!-- Nama Usaha -->
            <div class="mb-4">
                <label for="business-name" class="block text-sm font-medium text-gray-700">Nama Usaha</label>
                <input type="text" id="business-name" name="business-name" class="mt-1 p-2 w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" placeholder="Masukkan nama usaha" required />
            </div>

            <!-- Nomor Telepon -->
            <div class="mb-4">
                <label for="phone" class="block text-sm font-medium text-gray-700">Nomor Telepon</label>
                <input type="tel" id="phone" name="phone" class="mt-1 p-2 w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" placeholder="Masukkan nomor telepon" required />
            </div>

            <!-- Lokasi Pertanian -->
            <div class="mb-6">
                <label for="location" class="block text-sm font-medium text-gray-700">Lokasi Pertanian</label>
                <input type="text" id="location" name="location" class="mt-1 p-2 w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" placeholder="Masukkan lokasi pertanian" required />
            </div>

            <!-- Submit Button -->
            <div class="flex justify-end">
                <button type="submit" class="px-6 py-2 text-sm font-semibold text-white bg-blue-600 rounded-full hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    Simpan
                </button>
            </div>
        </form>
    </div>
</div>

    <div class="max-w-5xl mx-auto py-8 px-4">
    <!-- Contact Section -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-start">
      <!-- Left Side -->
      <div>
        <h2 class="text-2xl font-bold text-gray-800">Contact Information</h2>
      </div>

      <!-- Right Side -->
      <div>
        <ul class="space-y-6">
          <!-- Phone -->
          <li class="flex items-center">
            <div class="bg-gray-200 p-3 rounded-full">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7 7 4-4 7 7" />
              </svg>
            </div>
            <div class="ml-4">
              <p class="text-gray-800 font-medium">Phone</p>
              <p class="text-sm text-gray-600">Nomor Telepon</p>
              <p class="text-lg text-gray-800 font-semibold">+6281234567891022</p>
            </div>
          </li>

          <!-- Email -->
          <li class="flex items-center">
            <div class="bg-gray-200 p-3 rounded-full">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7 7 7-7m0 0l-7-7" />
              </svg>
            </div>
            <div class="ml-4">
              <p class="text-gray-800 font-medium">Email</p>
              <p class="text-sm text-gray-600">Alamat Surel</p>
              <p class="text-lg text-gray-800 font-semibold">sarah@gmail.com</p>
            </div>
          </li>

          <!-- Location -->
          <li class="flex items-center">
            <div class="bg-gray-200 p-3 rounded-full">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 2a4 4 0 014 4v12a4 4 0 01-4 4H8a4 4 0 01-4-4V6a4 4 0 014-4h8z" />
              </svg>
            </div>
            <div class="ml-4">
              <p class="text-gray-800 font-medium">Location</p>
              <p class="text-sm text-gray-600">Alamat Pertanian</p>
              <p class="text-lg text-gray-800 font-semibold">123 Farm Road</p>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="mt-12 border-t border-gray-200 pt-6 text-sm text-gray-500">
    <div class="max-w-5xl mx-auto flex items-center justify-between">
      <p>© 2024 All Rights Reserved.</p>
      <div class="space-x-4">
        <a href="#" class="hover:text-gray-800">Privacy Policy</a>
        <a href="#" class="hover:text-gray-800">Terms of Service</a>
      </div>
    </div>
</x-layout>

<x-layout>
  <!-- Navbar -->
  <nav class="bg-white shadow-md">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
      <!-- Logo -->
      <div class="flex items-center">
        <div class="text-lg font-bold flex items-center">
          <span class="inline-block w-6 h-6 bg-black rounded-full mr-2"></span> Detail Pertanian
        </div>
      </div>
      <!-- Navbar Links -->
      <div class="flex items-center space-x-6">
        <a href="#" class="text-gray-600 hover:text-black">Home</a>
        <a href="#" class="text-gray-600 hover:text-black">About</a>
        <a href="#" class="text-gray-600 hover:text-black">Contact</a>
        <input
          type="text"
          placeholder="Search in site"
          class="border border-gray-300 rounded-full px-4 py-1 text-sm focus:outline-none focus:ring-2 focus:ring-gray-400"
        />
      </div>
    </div>
  </nav>

  <!-- Profile Section -->
  <section class="bg-gray-700 text-white py-10">
    <div class="container mx-auto px-4 flex items-center justify-between">
      <div class="flex items-center space-x-6">
        <!-- Profile Image -->
        <div class="w-20 h-20 rounded-full bg-gray-400 flex justify-center items-center">
          <img
            src="https://via.placeholder.com/100"
            alt="Profile"
            class="rounded-full w-full h-full object-cover"
          />
        </div>
        <!-- Profile Info -->
        <div>
          <h1 class="text-2xl font-bold">Farmer Profile</h1>
          <p class="text-sm text-gray-300">Organic Certification</p>
          <p class="text-sm">Details about the farmer's agriculture practices</p>
        </div>
      </div>
      <!-- Edit Profile Button -->
      <div>
        <button
          class="bg-black text-white px-6 py-2 rounded-full hover:bg-gray-800"
        >
          Edit Profile
        </button>
      </div>
    </div>
  </section>

  <!-- Farming Details -->
  <section class="bg-white py-10">
    <div class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-2 gap-10">
      <!-- Left Section -->
      <div class="flex flex-col justify-center">
        <h1 class="text-3xl font-bold mb-2">Farming Details</h1>
        <p class="text-gray-600">Enter your farming information</p>
      </div>

      <!-- Right Section -->
      <div class="p-6 bg-gray-100 rounded-lg shadow-md">
        <!-- Jenis Tanaman -->
        <div class="mb-4">
          <label class="block text-sm font-medium text-gray-700 mb-2">Jenis Tanaman yang Dibudidayakan</label>
          <div class="flex space-x-4">
            <button class="px-4 py-2 bg-gray-200 rounded-md text-gray-700 hover:bg-gray-300">Padi</button>
            <button class="px-4 py-2 bg-gray-200 rounded-md text-gray-700 hover:bg-gray-300">Jagung</button>
            <button class="px-4 py-2 bg-gray-200 rounded-md text-gray-700 hover:bg-gray-300">Kacang Panjang</button>
          </div>
        </div>

        <!-- Luas Lahan -->
        <div class="mb-4">
          <label class="block text-sm font-medium text-gray-700 mb-2">Luas Lahan</label>
          <input
            type="text"
            placeholder="Enter land area in hectares"
            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-400"
          />
        </div>

        <!-- Teknologi Pertanian -->
        <div class="mb-6">
          <label class="block text-sm font-medium text-gray-700 mb-2">Teknologi Pertanian yang Digunakan</label>
          <div class="flex space-x-4">
            <button class="px-4 py-2 bg-gray-200 rounded-md text-gray-700 hover:bg-gray-300">
              Irrigation Systems
            </button>
            <button class="px-4 py-2 bg-gray-200 rounded-md text-gray-700 hover:bg-gray-300">
              Precision Agriculture Tools
            </button>
          </div>
        </div>

        <!-- Save Changes -->
        <div>
          <button
            class="w-full bg-black text-white py-2 rounded-md hover:bg-gray-800"
          >
            Save Changes
          </button>
        </div>
      </div>
    </div>
  </section>

    <!-- Wrapper untuk memusatkan konten -->
    <div class="flex flex-col items-center space-y-12 w-full">
    <!-- Farm Details Section -->
    <div class="bg-white shadow-md rounded-lg p-6 max-w-4xl flex flex-col md:flex-row items-center">
      <!-- Left Section -->
      <div class="w-full md:w-1/2 space-y-6">
        <h2 class="text-2xl font-bold">Farm Details</h2>
        <p class="text-gray-600">Overview of farming information</p>
        <button class="px-4 py-2 bg-blue-500 text-white rounded-lg shadow hover:bg-blue-600">View More</button>

        <div class="flex space-x-8">
          <!-- Certification -->
          <div class="text-center">
            <div class="text-4xl">😊</div>
            <p class="mt-2 text-sm text-gray-500">Sertifikasi Organik</p>
            <p class="font-semibold">Certified</p>
          </div>
          <!-- Experience -->
          <div class="text-center">
            <div class="text-4xl">😊</div>
            <p class="mt-2 text-sm text-gray-500">Pengalaman Bertani</p>
            <p class="font-semibold">5 years</p>
          </div>
        </div>
      </div>

      <!-- Right Section -->
      <div class="w-full md:w-1/2 mt-6 md:mt-0 flex justify-center">
        <img src="https://via.placeholder.com/400" alt="Farmers" class="rounded-lg shadow">
      </div>
    </div>

    <!-- Farm Metrics Section -->
    <div class="bg-white w-full max-w-3xl rounded-lg shadow p-8">
      <!-- Header -->
      <div class="text-center">
        <h1 class="text-2xl font-bold">Farm Metrics</h1>
        <p class="text-gray-600">Key metrics of farm performance</p>
        <button class="mt-4 px-4 py-2 bg-black text-white rounded-lg shadow hover:bg-gray-800">
          View Report
        </button>
      </div>

      <!-- Metric Cards -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-8">
        <!-- Card 1 -->
        <div class="bg-gray-50 border rounded-lg p-4 text-center">
          <p class="text-gray-500">Crop Yield</p>
          <h2 class="text-2xl font-bold">5000 tons</h2>
          <p class="text-green-500">+10%</p>
        </div>
        <!-- Card 2 -->
        <div class="bg-gray-50 border rounded-lg p-4 text-center">
          <p class="text-gray-500">Water Usage</p>
          <h2 class="text-2xl font-bold">5000 gallons</h2>
        </div>
        <!-- Card 3 -->
        <div class="bg-gray-50 border rounded-lg p-4 text-center">
          <p class="text-gray-500">Soil Health</p>
          <h2 class="text-2xl font-bold">Good</h2>
        </div>
      </div>

      <!-- Chart Section -->
      <div class="mt-8 bg-gray-50 border rounded-lg p-6">
        <h3 class="font-semibold text-lg mb-4">Crop Yield Comparison</h3>
        <div class="h-48 bg-gray-200 flex items-center justify-center rounded">
          <!-- Placeholder for Chart -->
          <p class="text-gray-500">[Chart Placeholder]</p>
        </div>
      </div>
    </div>
  </div>

    <!-- Footer -->
    <footer class="mt-8 text-center text-gray-500">
      © 2024 Farming Solutions Ltd.
    </footer>
  </div>

</x-layout>
