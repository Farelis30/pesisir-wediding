<x-layouts.app>
@section('title', 'Kontak')
<div class="min-h-screen flex flex-col">
    <livewire:welcome-navbar />

    <!-- Hero Section -->
    <div class="relative bg-cover bg-center h-screen" style="background-image: url('https://images.unsplash.com/photo-1511795409834-ef04bbd61622?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1920&q=80');">
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-full flex flex-col justify-center">
            <div class="text-center">
                <h1 class="text-4xl md:text-6xl font-serif text-white mb-6">Hubungi Kami</h1>
                <p class="text-xl text-white mb-8 max-w-3xl mx-auto">Kami siap membantu Anda merencanakan pernikahan impian dengan layanan profesional kami</p>
            </div>
        </div>
    </div>

    <!-- Contact Form Section -->
    <div class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-serif text-gray-900 mb-4">Kontak Kami</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">Jika Anda memiliki pertanyaan atau ingin berkonsultasi lebih lanjut, isi form di bawah ini dan tim kami akan segera menghubungi Anda</p>
            </div>
            <form action="#" method="POST">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div>
                        <label for="name" class="block text-lg font-medium text-gray-700">Nama Anda</label>
                        <input type="text" id="name" name="name" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-pink-600" required />
                    </div>
                    <div>
                        <label for="email" class="block text-lg font-medium text-gray-700">Email Anda</label>
                        <input type="email" id="email" name="email" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-pink-600" required />
                    </div>
                </div>
                <div class="mt-8">
                    <label for="message" class="block text-lg font-medium text-gray-700">Pesan Anda</label>
                    <textarea id="message" name="message" rows="6" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-pink-600" required></textarea>
                </div>
                <div class="mt-8 text-center">
                    <button type="submit" class="inline-block px-8 py-4 rounded-md bg-pink-600 text-white font-medium hover:bg-pink-700 transition-colors">Kirim Pesan</button>
                </div>
            </form>
        </div>
    </div>


    <!-- Contact Details Section -->
<!-- Contact Details Section -->
<div class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-serif text-gray-900 mb-4">Alamat Kami</h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">Kunjungi kami di lokasi atau hubungi kami untuk informasi lebih lanjut</p>
        </div>
        <div class="bg-gray-100 rounded-lg shadow-md p-8">
            <table class="min-w-full">
                <tbody>
                    <tr>
                        <td class="py-4 px-6 border-b border-gray-200 text-left">
                            <h3 class="text-xl font-semibold text-gray-900">Alamat</h3>
                            <p class="text-gray-600 mt-2">Jl. Contoh Alamat No.123, Jakarta</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-4 px-6 border-b border-gray-200 text-left">
                            <h3 class="text-xl font-semibold text-gray-900">Telepon</h3>
                            <p class="text-gray-600 mt-2">+62 123 4567 890</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-4 px-6 text-left">
                            <h3 class="text-xl font-semibold text-gray-900">Email</h3>
                            <p class="text-gray-600 mt-2">info@weddingorganizer.com</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-4 px-6 border-b border-gray-200 text-left">
                            <h3 class="text-xl font-semibold text-gray-900">Peta Lokasi</h3>
                            <div class="mt-2">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.666307543373!2d106.82458402378289!3d-6.1754083438119896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5d2db8c5617%3A0x4e446b7ac891d847!2sMonas%2C%20Gambir%2C%20Kecamatan%20Gambir%2C%20Kota%20Jakarta%20Pusat%2C%20Daerah%20Khusus%20Ibukota%20Jakarta!5e0!3m2!1sen!2sid!4v1740280611971!5m2!1sen!2sid" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

    <!-- Call to Action -->
    <div class="py-16 bg-pink-600">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-serif text-white mb-4">Siap Rencanakan Pernikahan Anda?</h2>
                <p class="text-xl text-white opacity-90 mb-8 max-w-3xl mx-auto">Konsultasikan kebutuhan pernikahan Anda dengan tim ahli kami secara gratis</p>
                <a href="/konsultasi" class="inline-block px-8 py-4 rounded-md bg-white text-pink-600 font-medium hover:bg-gray-100 transition-colors">Jadwalkan Konsultasi</a>
            </div>
        </div>
    </div>

    <livewire:welcome-footer />
</div>
</x-layouts.app>
