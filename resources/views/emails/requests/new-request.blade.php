<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nuevo mensaje recibido</title>
</head>
<body style="margin:0;padding:0;background:#FAFAF7;font-family:Arial,Helvetica,sans-serif;color:#0B2036;">
    <table width="100%" cellpadding="0" cellspacing="0" role="presentation" style="background:#FAFAF7;padding:32px 16px;">
        <tr>
            <td align="center">
                <table width="100%" cellpadding="0" cellspacing="0" role="presentation" style="max-width:640px;background:#ffffff;border-radius:22px;overflow:hidden;box-shadow:0 18px 45px rgba(7,28,53,.10);">
                    <tr>
                        <td style="background:#071C35;padding:34px 32px;text-align:center;border-bottom:3px solid #F2B705;">
                            <img src="{{ asset('images/logoLetras.png') }}" alt="Buzón MR Lana" style="max-width:220px;height:auto;margin-bottom:14px;">
                            <div style="color:#FFD45A;font-size:12px;letter-spacing:2px;text-transform:uppercase;">
                                Buzón MR Lana
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td style="padding:34px 34px 26px;">
                            <div style="display:inline-block;background:rgba(242,183,5,.12);color:#0B3A67;border:1px solid rgba(242,183,5,.35);border-radius:999px;padding:6px 12px;font-size:12px;font-weight:700;letter-spacing:.5px;text-transform:uppercase;margin-bottom:18px;">
                                Mensaje interno
                            </div>

                            <h1 style="margin:0 0 10px;font-size:24px;line-height:1.25;color:#071C35;">
                                Nuevo mensaje recibido
                            </h1>

                            <p style="margin:0 0 26px;font-size:15px;line-height:1.6;color:#5F6B7A;">
                                Se ha registrado un nuevo mensaje en el Buzón MR Lana. Revisa la información y da seguimiento desde el panel administrativo.
                            </p>

                            <table width="100%" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:separate;border-spacing:0 10px;">
                                <tr>
                                    <td style="width:38%;font-size:13px;color:#5F6B7A;font-weight:700;">Nombre</td>
                                    <td style="font-size:14px;color:#071C35;">{{ $request->full_name ?? 'No proporcionado' }}</td>
                                </tr>
                                <tr>
                                    <td style="font-size:13px;color:#5F6B7A;font-weight:700;">Contacto</td>
                                    <td style="font-size:14px;color:#071C35;">{{ $request->contact_info ?? 'No proporcionado' }}</td>
                                </tr>
                                <tr>
                                    <td style="font-size:13px;color:#5F6B7A;font-weight:700;">Área / Departamento</td>
                                    <td style="font-size:14px;color:#071C35;">{{ \App\Enums\Department::tryFrom($request->department)?->label() ?? $request->department }}</td>
                                </tr>
                                <tr>
                                    <td style="font-size:13px;color:#5F6B7A;font-weight:700;">Tipo de mensaje</td>
                                    <td style="font-size:14px;color:#071C35;">{{ $request->request_type->label() }}</td>
                                </tr>
                                @if ($request->incident_date)
                                <tr>
                                    <td style="font-size:13px;color:#5F6B7A;font-weight:700;">Fecha aproximada</td>
                                    <td style="font-size:14px;color:#071C35;">{{ $request->incident_date->format('d/m/Y') }}</td>
                                </tr>
                                @endif
                                @if ($request->involved_people)
                                <tr>
                                    <td style="font-size:13px;color:#5F6B7A;font-weight:700;">Personas relacionadas</td>
                                    <td style="font-size:14px;color:#071C35;">{{ $request->involved_people }}</td>
                                </tr>
                                @endif
                                <tr>
                                    <td style="font-size:13px;color:#5F6B7A;font-weight:700;">Fecha de envío</td>
                                    <td style="font-size:14px;color:#071C35;">{{ $request->created_at->format('d/m/Y H:i') }}</td>
                                </tr>
                            </table>

                            <div style="margin-top:26px;padding:18px 20px;background:#FAFAF7;border-left:4px solid #F2B705;border-radius:14px;">
                                <div style="font-size:13px;font-weight:700;color:#071C35;margin-bottom:8px;">
                                    Mensaje
                                </div>
                                <div style="font-size:15px;line-height:1.7;color:#0B2036;white-space:pre-line;">{{ $request->description }}</div>
                            </div>

                            @if ($request->has_evidence)
                                <div style="margin-top:18px;padding:14px 16px;background:rgba(242,183,5,.10);border:1px solid rgba(242,183,5,.28);border-radius:14px;color:#0B3A67;font-size:14px;line-height:1.5;">
                                    Este mensaje cuenta con archivos adjuntos. Puedes revisarlos desde el panel administrativo.
                                </div>
                            @endif

                            <div style="text-align:center;margin-top:30px;">
                                <a href="{{ $panelUrl }}" style="display:inline-block;background:#071C35;color:#ffffff;text-decoration:none;padding:14px 24px;border-radius:12px;font-weight:700;font-size:14px;">
                                    Ver en el panel administrativo
                                </a>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td style="padding:22px 34px;background:#EEF2F6;border-top:1px solid #DDE5EE;text-align:center;">
                            <p style="margin:0 0 6px;color:#5F6B7A;font-size:12px;line-height:1.6;">
                                Este correo fue generado automáticamente por Buzón MR Lana.<br>
                                No respondas a este mensaje.
                            </p>
                            <p style="margin:0;color:#9FB1C2;font-size:11px;">
                                ID interno: {{ $request->folio }}
                            </p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
