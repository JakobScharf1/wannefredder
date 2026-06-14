import { ComponentFixture, TestBed } from '@angular/core/testing';

import { CtaTwo } from './cta-two';

describe('CtaTwo', () => {
  let component: CtaTwo;
  let fixture: ComponentFixture<CtaTwo>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [CtaTwo]
    })
    .compileComponents();

    fixture = TestBed.createComponent(CtaTwo);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
