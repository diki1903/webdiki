@extends('layouts.app')

@section('content')
<div class="profil-container" style="text-align: center;">
    <h2 style="color: var(--primary); margin-bottom: 20px;">Mari Terhubung!</h2>
    
    <p style="margin-bottom: 40px; color: #666; font-size: 1.1rem;">
        Halo! Jika ingin menjalin silaturahmi, diskusi seputar IT, atau sekadar menyapa, silakan hubungi saya melalui platform di bawah ini:
    </p>

    <div class="sosmed-grid">
        
        <a href="https://wa.me/6282211626709" target="_blank" class="sosmed-card whatsapp">
            <span class="sosmed-icon">💬</span>
            <p>WhatsApp</p>
        </a>

        <a href="https://www.instagram.com/dkkrnwn___?igsh=MXR6dG9jNGZmY2t3NA==" target="_blank" class="sosmed-card instagram">
            <span class="sosmed-icon">📸</span>
            <p>Instagram</p>
        </a>

        <a href="https://www.tiktok.com/@dexter_1905?_r=1&_t=ZS-959gaHfA23c" target="_blank" class="sosmed-card tiktok">
            <span class="sosmed-icon">🎵</span>
            <p>TikTok</p>
        </a>

    </div>

    <div style="margin-top: 60px; padding: 25px; border-top: 1px dashed #ccc; background: #fafafa; border-radius: 0 0 20px 20px;">
        <p style="font-style: italic; color: #777; margin: 0;">
            "Terima kasih sudah berkunjung ke jurnal perjalanan lebaran saya. Silaturahmi memperpanjang umur dan melapangkan rezeki."
        </p>
    </div>
</div>
@endsection