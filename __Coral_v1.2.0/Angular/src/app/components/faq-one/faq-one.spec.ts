import { ComponentFixture, TestBed } from '@angular/core/testing';

import { FaqOne } from './faq-one';

describe('FaqOne', () => {
  let component: FaqOne;
  let fixture: ComponentFixture<FaqOne>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [FaqOne]
    })
    .compileComponents();

    fixture = TestBed.createComponent(FaqOne);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
